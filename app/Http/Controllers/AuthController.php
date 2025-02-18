<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // Putanja do Blade fajla
    }
    public function showLoginForm()
    {
        return view('login'); // Putanja do Blade fajla
    }

    public function login (Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Preusmeravanje nakon uspešnog logovanja
            return redirect()->route('users.index');  // Prilagodite rutu prema vašim potrebama
        }
    
        // Ako login ne uspe
        return back()->withErrors([
            'email' => 'Pogrešni podaci za prijavu.',
        ])->withInput();

    }

}
