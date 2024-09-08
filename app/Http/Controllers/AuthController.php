<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    //
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $userlogin = $request->only('email', 'password');
        if (Auth::attempt($userlogin)) {
            return redirect('/');
        } else {
            return redirect('login')->with('error_message', 'Failed to login');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register_form()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $userregister = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|max:120',
            'password' => 'required|min:6|max:20|confirmed',

        ]);


        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect('login');
    }
}
