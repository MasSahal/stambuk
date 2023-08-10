<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
        // echo "Halo";
    }

    public function dashboard_admin()
    {
        return view('admin.dashboard');
        // echo "Halo";
    }

    public function login()
    {
        return view('login');
        // echo "Halo";
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login');
    }

    public function input_nilai(Request $request)
    {
        $id = $request->get('id') ?? 0;
        return view('admin.input-nilai', ['id' => $id]);
    }
}
