<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah pengguna sudah login
        if (! $request->user()) {
            // Jika belum login, redirect ke halaman login
            return redirect()->route('login');
        }

        // Cek apakah role pengguna sesuai dengan salah satu dari role yang dibutuhkan
        if (! in_array($request->user()->role, $roles)) {
            // Jika role tidak sesuai, redirect ke halaman yang diinginkan
            return redirect()->route('home'); // Sesuaikan route ini sesuai kebutuhan Anda
        }

        // Jika role sesuai, lanjutkan request
        return $next($request);
    }
}