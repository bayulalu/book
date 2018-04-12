<?php

namespace App\Http\Middleware;

use Closure;
// use App\Models\User;

class adminMiddleware
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

        $user = $request->user();

        if ($user) {
            if ($user->isAdmin()) {
                return $next($request);
            }
        }
        

        return abort(403);
    }
}
