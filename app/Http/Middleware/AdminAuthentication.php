<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/');
        // }
        if(Auth::guard($guard)->check()){
            if(Auth::user()->role_id == 1){
            }else{
                return redirect('/');
            }
        }else {
            return redirect('/');
        }

        return $next($request);
    }
}
