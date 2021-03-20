<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
//        if (!Auth::Check() || Auth::User()->is_admin != "1") {
//            return abort(404);
//        }
        if(auth()->check()){
            $user=auth()->user();
            if($user->is_admin != 1){
                session()->flush();
                return redirect()->route('admin_show_login');
            }
        }else{

            dd('no');

            //return redirect()->route('login');
        }
        return $next($request);
    }

}
