<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ১. ইউজার লগইন আছে কি না চেক করুন
        if (Auth::check()) {
            
            // ২. ইউজারের রোল 'admin' কি না চেক করুন
            if (Auth::user()->role === 'admin') {
                return $next($request);
            }

            // ৩. এডমিন না হলে এরর মেসেজসহ হোম পেজে পাঠিয়ে দিন
            return redirect('/')->with('error', 'You do not have admin access.');
        }

        // ৪. ইউজার লগইন না থাকলে তাকে লগইন পেজে পাঠিয়ে দিন
        return redirect()->route('login')->with('error', 'Please login first.');
    }
}