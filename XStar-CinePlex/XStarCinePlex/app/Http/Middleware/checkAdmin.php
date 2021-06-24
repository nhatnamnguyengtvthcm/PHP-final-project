<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
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
        if(!session()->has('adminLog') && ($request->path() != 'user/login_user')) {
            return redirect('user/login_user')->with('fail', 'Admin must be logged in');
        }

        if (session()->has('adminLog') && ($request->path() == 'user/login_user')) {
            return back();
    }

    return $next($request);
}
}
