<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class dashboardController extends Controller
{
    public function xiimipa1(){
        $user = User::find(Auth::user()->id);
        $students = User::where('role', '=', 'student')
               ->where('class', '=', 'XII MIPA 1')
               ->get();
        return view('dashboard.xiimipa1', [
            'title' => 'Dashboard',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'students' => $students,
        ]);
    }
    public function xiimipa2(){
        $user = User::find(Auth::user()->id);
        $students = User::where('role', '=', 'student')
               ->where('class', '=', 'XII MIPA 2')
               ->get();
        return view('dashboard.xiimipa2', [
            'title' => 'Dashboard',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'students' => $students,
        ]);
    }
    public function xiimipa3(){
        $user = User::find(Auth::user()->id);
        $students = User::where('role', '=', 'student')
               ->where('class', '=', 'XII MIPA 3')
               ->get();
        return view('dashboard.xiimipa3', [
            'title' => 'Dashboard',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'students' => $students,
        ]);
    }
    public function xiimipa4(){
        $user = User::find(Auth::user()->id);
        $students = User::where('role', '=', 'student')
               ->where('class', '=', 'XII MIPA 4')
               ->get();
        return view('dashboard.xiimipa4', [
            'title' => 'Dashboard',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'students' => $students,
        ]);
    }
    public function xiimipa5(){
        $user = User::find(Auth::user()->id);
        $students = User::where('role', '=', 'student')
               ->where('class', '=', 'XII MIPA 5')
               ->get();
        return view('dashboard.xiimipa5', [
            'title' => 'Dashboard',
            'name' => Auth::user()->name,
            'class' => Auth::user()->class,
            'email' => Auth::user()->email,
            'students' => $students,
        ]);
    }
}
