<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 'admin') {
            return $next($request);
        }
        alert()->error('ErrorAlert','Tidak Di izinkan');
        auth()->logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}
