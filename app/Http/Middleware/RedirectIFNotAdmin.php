<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIFNotAdmin
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
        if(Auth::check()){
            if(auth()->user()->role_id < 2){
                return redirect('/admin/login');
            }
        }
        return $next($request);
    }
}
