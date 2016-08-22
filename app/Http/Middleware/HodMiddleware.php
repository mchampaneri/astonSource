<?php

namespace App\Http\Middleware;

use Closure;

class HodMiddleware
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
        if(\Auth::user()->asFaculty()->is_hod == '1')
        return $next($request);
        else
        {
            \Auth::logout();
            return redirect()->to('/');
        }
    }
}
