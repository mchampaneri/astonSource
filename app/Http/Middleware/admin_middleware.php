<?php

namespace App\Http\Middleware;

use Closure;

class admin_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->role != 'admin') {
            return redirect()->to('/logout');
        }

        return $next($request);
    }
}
