<?php

namespace App\Http\Middleware;

use Closure;

class chekLogin
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
         if(!session()->has('userLog') && ($request->path() != 'user/login_user')) {
            return redirect('user/login_user')->with('fail', 'You must be logged in');
        }

        if (session()->has('userLog') && ($request->path() == 'user/login_user')) {
            return back();
        }
      /*   if ($request->session()->has('userLog')) {
            return next($request);
        } */

        return $next($request);

    }
}
