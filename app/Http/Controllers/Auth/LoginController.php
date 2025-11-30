<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;    // PENTING!!
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        // middleware akan BERFUNGSI setelah extends Controller
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
