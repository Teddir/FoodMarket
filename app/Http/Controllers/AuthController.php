<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
use Illuminate\Foundation\Auth\User as AuthUser;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth/login');
    }
    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('login/success');
        } else {
            return back()->with('error', 'Wrong login details');
        }
    }

    function successlogin()
    {
        return redirect('/');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register()
    {
        return view('Auth/register');
    }

    public function doRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)  
        ]);

        return redirect('/login');
    }
}
