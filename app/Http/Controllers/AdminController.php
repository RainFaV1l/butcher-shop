<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AcceptRequest;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\Cart;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $carts = Cart::query()->orderByDesc('created_at')->get();

        return view('admin.index', compact('carts'));
    }

    public function products()
    {
        $products = Product::all();

        return view('admin.products', compact('products'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function edit(Product $product)
    {
        return view('admin.edit', compact('product'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        unset($data['preview']);

        if($request->hasFile('preview'))
        {
            $data['preview'] = $request->file('preview')->store('public/products/');
        }

        Product::query()->create($data);

        session()->flash('success', 'Вы успешно добавили товар.');

        return redirect(route('admin.products.index'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        unset($data['preview']);

        if($request->hasFile('preview'))
        {
            $data['preview'] = $request->file('preview')->store('public/products/');
        }

        $product->update($data);

        session()->flash('success', 'Вы успешно обновили товар.');

        return redirect(route('admin.products.index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        session()->flash('success', 'Вы успешно удалили товар.');

        return redirect(route('admin.products.index'));
    }

    public function accept(AcceptRequest $request, Cart $cart)
    {
        $data = $request->validated();

        $cart->update($data);

        session()->flash('success', 'Вы успешно провели модерацию заказа.');

        return redirect(route('admin.index'));
    }
}
