<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|min:7',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) return redirect()->route('login')->withErrors(['errors' => $validator->errors()]);

        if (!Auth::attempt($request->only(['email', 'password']))) return redirect()->back()->withErrors(['errors' => $validator]);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
