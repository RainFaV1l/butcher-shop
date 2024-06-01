<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

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

    public function register(RegisterRequest $request)
    {
        auth()->login(User::query()->create($request->validated()));

        session()->regenerate();

        session()->flash('success', 'Успешная регистрация.');

        return redirect()->route('profile');
    }

    public function login(LoginRequest $request)
    {
        if(auth()->attempt($request->validated()))
        {
            session()->regenerate();

            session()->flash('success', 'Успешная авторизация.');

            return redirect()->route('profile');
        }

        session()->flash('danger', 'Неверный логин или пароль.');

        return back()->withErrors(['invalid_credentials' => 'Неверный логин или пароль'])->withInput();
    }

    public function logout()
    {
        auth()->logout();

        session()->invalidate();

        session()->regenerateToken();

        session()->flash('success', 'Вы успешно вышли из аккаунта.');

        return redirect()->route('loginPage');
    }
}
