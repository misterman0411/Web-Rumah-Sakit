<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:user,email',
            'password' => 'required|confirmed|min:5'
        ]);

        User::create([
            'username' => $request->name,
            'email' => $request->email,
            'password_hash' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Berhasil mendaftar, silakan login!');
    }
}
