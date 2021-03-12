<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        return redirect('dashboard');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard')->with('success', __('Selamat datang :name', ['name' => ucfirst(Auth::user()->name)]));
        };
        return redirect('/')->with('error', 'Username dan/atau Password Salah');
    }

    public function logout(Request $reqeust)
    {
        Auth::logout();
        return redirect('/');
    }
}
