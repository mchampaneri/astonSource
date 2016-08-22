<?php

namespace App\Http\Middleware;

use Closure;

class FacultyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->role == "faculty")
            return $next($request);
        else {
            \Auth::logout();
            return redirect()->to('/');

        }
    }
}
