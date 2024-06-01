<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\ChangePersonalInfoRequest;
use App\Models\Cart;

class UserController extends Controller
{
    public function profile()
    {
        $carts = Cart::query()->where('user_id', auth()->id())->orderByDesc('created_at')->get();

        return view('user.profile', compact('carts'));
    }

    public function changePersonalInfo(ChangePersonalInfoRequest $request)
    {
        auth()->user()->update($request->validated());

        session()->flash('success', 'Вы успешно обновили данные.');

        return back();
    }
}
