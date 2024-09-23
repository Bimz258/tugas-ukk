<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class iniTamu
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return redirect('admin')->with('success', 'Anda sudah login sebagai admin.');
            }
            return redirect('guest')->with('success', 'Anda sudah login sebagai user.');
        }
        return $next($request);
    }
}
