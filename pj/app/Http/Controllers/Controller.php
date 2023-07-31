<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;
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
    public function showDashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para acessar a página de dashboard.');
        }

        $user = Auth::user();
        return view('dashboard')->with('user', $user);
    }
    public function register(Request $request)
    {
        $name = $request -> name;
        $email = $request -> email;
        $password = $request -> password;
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'permition' => 'bronze'
        ]);


        return redirect()->route('login')->with('success', 'Registro bem-sucedido. Faça o login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('success','Login Bem Succedido');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'As credenciais fornecidas são inválidas.']);
        }
    }

    }

