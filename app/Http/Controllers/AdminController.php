<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AcceptRequest;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $query = Cart::query()->orderByDesc('created_at');

        if(request()->filled('status')) $query->where('status', request('status'));

        $carts = $query->get();

        $statuses = collect([
            'Отклонен',
            'Оформлен',
            'В доставке',
            'Доставлен',
        ]);

        return view('admin.index', compact('carts', 'statuses'));
    }

    public function statistics()
    {
        $ordersByDay = Cart::query()->selectRaw("DATE_FORMAT(created_at,  '%d-%m-%Y') as date, COUNT(*) as count")
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        $products = Product::query()
            ->select('products.id', 'products.name',  DB::raw('SUM(cart_products.quantity) as quantity'))
            ->leftJoin('cart_products', 'products.id', '=', 'cart_products.product_id')
            ->groupBy('products.id')
            ->orderBy('quantity', 'desc')
            ->get();

        return view('admin.statistics', compact('ordersByDay', 'products'));
    }

    public function products()
    {
        $products = Product::all();

        return view('admin.products', compact('products'));
    }

    public function reviews()
    {
        $reviews = Review::all();

        return view('admin.reviews', compact('reviews'));
    }

    public function switch(Review $review)
    {
        $status = !$review->is_published;

        $review->update([
            'is_published' => $status
        ]);

        session()->flash('success', 'Вы успешно изменили статус отзыва.');

        return redirect(route('admin.reviews'));
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
