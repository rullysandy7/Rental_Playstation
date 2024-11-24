<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->guard('admin')->check()) {
            return $next($request); // Lanjutkan ke request berikutnya jika admin
        }

        // Jika bukan admin, arahkan ke halaman login admin
        return redirect()->route('filament.admin.auth.login')->with('error', 'Unauthorized access.');
    }
}
