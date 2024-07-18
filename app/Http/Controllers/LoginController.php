<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->status == 'admin') {
                return redirect()->route('admin.dashboard.index');
            } else {
                return redirect()->route('user.dashboard.index')->with('success', 'Login Berhasil');
            }
        }
        return back()->with('loginError', 'Username atau password salah!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
