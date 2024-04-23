<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class authController extends Controller
{
    public function signin(){
        return view('signin', [
            'title' => 'Masuk'
        ]);
    }
    public function action_signin(Request $request){
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/fisika');
        }

        return back()->with('loginError', 'Gagal masuk! Email atau kata sandi salah');

    }

    public function signup(){
        return view('signup', [
            'title' => 'Daftar'
        ]);
    }
    public function action_signup(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255|min:5',
            'class' => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:255||confirmed',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        return redirect('/masuk')->with('success', 'Selamat akunmu berhasil dibuat!');
    }

    public function action_signout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/masuk');
    }
}
