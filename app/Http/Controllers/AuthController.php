<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request){
        $validated = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string',
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard.index');
        }
        return back()->withErrors([
            'email' => 'Неверные учетные данные.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
