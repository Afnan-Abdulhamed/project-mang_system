<?php

namespace App\Http\Middleware;

use Closure;

/**
 * middleware to check if the user allowed to access the dashboard or not 
 * 
 * @author Afnan
 */
class CheckAdmin
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ( $request->user()->type != 'admin' ) {
            return redirect('/projects-manager');
        }
        return $next($request);
    }
}