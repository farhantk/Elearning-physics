<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Guest
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
                return redirect()->route('dashboard');
            }
    
            if (Auth::user()->role == User::ROLE_STUDENT) {
                return redirect()->route('main');
            }
        } else {
            return $next($request);
        }
    }
}
