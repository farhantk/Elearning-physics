<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Lecturer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // User is authenticated
            if (Auth::user()->role == User::ROLE_LECTURER) {
                return $next($request);
            }
    
            if (Auth::user()->role == User::ROLE_STUDENT) {
                return redirect()->route('main');
            }
        } else {
            // User is not authenticated
            // Redirect to login page or display a message
            return redirect()->route('login'); // Contoh redirect ke halaman login
        }
    }
}
