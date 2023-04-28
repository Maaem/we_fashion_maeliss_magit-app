<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function forLogin()
    {
        return view('admin');
    }

    public function doLogin(LoginRequest $request)
    {
        $cred = $request->validated();

        if(Auth::attempt($cred))
        {
            session()->regenerate();
            return redirect('dashboard'); 
        };

        return to_route('auth.login')->withErrors([
            'email' => 'email ou mot de passe invalide'
        ]);
    }

    public function forLogout()
    {
        Auth::logout();
         return to_route('auth.login'); 
    }
    
}
  