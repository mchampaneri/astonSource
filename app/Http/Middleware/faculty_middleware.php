<?php

namespace App\Http\Middleware;

use Closure;

class faculty_middleware
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
        if (\Auth::user()->role != "faculty" && \Auth::user()->role != "hod")
        {
            return redirect()->to('/logout');
        }
        return $next($request);
    }
}
