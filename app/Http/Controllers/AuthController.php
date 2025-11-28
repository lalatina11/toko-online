<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('auth.register');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function handleRegister(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|min:3',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            'hp' => 'required|string|min:12',
        ]);
        $user = User::create($validated);
        Auth::login($user);
        $request->session()->regenerate();
        return redirect('/dashboard');
    }

    public function handleLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        Auth::login($validated);
        $request->session()->regenerate();
        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
