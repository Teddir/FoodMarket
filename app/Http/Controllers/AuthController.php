<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view ('Auth/login');
    }
    public function register(){
        return view ('Auth/register');
    }
    public function doLogin(Request $request){
        $this -> validate($request,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request -> get('email'),
            'password' => $request -> get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('login/success');
        }
        else{
            return back()->with('error', 'Wrong login details');
        }
    }

    function successlogin(){
        return redirect('/');
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
