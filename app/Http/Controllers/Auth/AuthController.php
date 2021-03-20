<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //

    public function doLogin(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && auth()->user()->is_admin == 1) {


            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('status', 'من فضلك ادخل بيانات صحيحة');

    }

    public function logout(){
        auth()->logout();

        return redirect()->route('admin_show_login');
    }

}
