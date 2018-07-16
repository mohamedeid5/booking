<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    protected $redirectTo = '/home';

 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login() {

        return view('auth.login');
    }

    public function do_login() {

        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = request('remember') ? true : false;
        if(auth()->attempt(['email'=>request('email'),'password'=>request('password')],$remember)) {
            return redirect('/');
        } elseif (auth()->guard('admin')->attempt(['email'=>request('email'),'password'=>request('password')],$remember)) {
            return redirect('/');
        } else {
            return redirect('login');
        }
    }

    public function logout() {
        if(auth()->user()){
            auth()->logout();
        }
        auth()->guard('admin')->logout();

        return redirect('/');
    }



     public function forgetpassword() {

        //return view('auth.login');
    }
}
