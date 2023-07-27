<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;

class Controller extends BaseController
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $name = $request -> name;
        $email = $request -> email;
        $password = $request -> password;
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        return redirect()->route('login')->with('success', 'Registro bem-sucedido. Faça o login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view('dashboard');
        }
        $email = $request -> email;
        $password = $request -> password;

        $user = User::find($email);

    }
}
