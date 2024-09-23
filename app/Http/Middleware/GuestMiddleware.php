<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role === 'user') {
            return $next($request); // Izinkan akses
        }

        return redirect('/sesi')->withErrors(['error' => 'Akses ditolak.']);
    }
}
