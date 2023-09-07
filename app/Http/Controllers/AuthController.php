<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function index()
    {
        return view('auth-login');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 0) {
                return redirect()->intended('mysiswa');
            } else {
                return redirect()->intended('admin');
            }
        }
        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        //request()->session()->invalide();
        return redirect()->to('/login');
    }
}
