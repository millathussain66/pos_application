<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    public function login()
    {
        return view('login.form');
    }
    public function confrim(LoginRequest $loginRequest)
    {


        $data = $loginRequest->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->intended('dashboard');
        }else{
            return redirect()->route('login')->withErrors(['Email And Password Is Invalide']);
        }



    }

    public function logout()
    {

        Auth::logout();

        return redirect()->route('login');

    }
}
