<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\ChangePersonalInfoRequest;
use App\Models\Cart;

class UserController extends Controller
{
    public function profile()
    {
        $query = Cart::query()->where('user_id', auth()->id())->orderByDesc('created_at');

        if(request()->filled('status')) $query->where('status', request('status'));

        $carts = $query->get();

        $statuses = collect([
            'Отклонен',
            'Оформлен',
            'В доставке',
            'Доставлен',
        ]);

        return view('user.profile', compact('carts', 'statuses'));
    }

    public function changePersonalInfo(ChangePersonalInfoRequest $request)
    {
        auth()->user()->update($request->validated());

        session()->flash('success', 'Вы успешно обновили данные.');

        return back();
    }
}
