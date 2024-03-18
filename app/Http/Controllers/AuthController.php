<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function showLogin(){
        return view("auth.login");
    }

    public function checkLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('indexAddname');
        }

        return redirect()->back()->withErrors([
            'eamil' => 'Credentials do not match our record',
        ]);
    }

    public function logout(){
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('showLogin');
    }
}
