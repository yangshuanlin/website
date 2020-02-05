<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        $arr=[config('app.admin').'/login'];
        $key=md5('adminIsLogin');
        $role=md5('adminRoleId');
        $admin=md5('adminId');
        if(!in_array($request->path(),$arr)){
            if(!(session($key) && session($role)>0 && session($admin)>0)){
             return redirect('/'.config('app.admin').'/login');
            }
        }
        return $next($request);
    }
}
