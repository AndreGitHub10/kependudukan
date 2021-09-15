<?php

namespace App\Http\Middleware;

use Closure;

class RtRole
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
        $user = \Auth::user();
        // if ($user->role != 3) {
        //     return abort(404);
        // }

        return $next($request);
    }
}