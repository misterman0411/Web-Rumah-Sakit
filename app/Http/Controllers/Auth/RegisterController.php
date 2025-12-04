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
            'name'         => 'required',
            'email'        => 'required|email|unique:users,email',
            'phone_number' => 'nullable|string|max:20',
            'nik'          => 'nullable|string|max:20',
            'password'     => 'required|confirmed|min:5'
        ]);

        User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone_number' => $request->phone_number,
            'nik'          => $request->nik,
            'password'     => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Berhasil mendaftar, silakan login!');
    }
}
