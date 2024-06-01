<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cart\CheckoutRequest;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);

        $total = $this->getTotalPrice();

        return view('cart.index', compact('cart', 'total'));
    }

    public function getTotalPrice()
    {
        return collect(session('cart', []))->sum(fn ($item) => $item['price'] * $item['quantity']);
    }

    public function plus($id)
    {
        $cart = collect(session('cart', []));

        $exist = $cart->contains(function ($cartProduct) use ($id) {
            return $cartProduct->id == $id;
        });

        if($exist) {

            $cart->transform(function ($product) use ($id) {

                $limit = 100;

                if ($product->id == $id && $product->quantity < $limit) {

                    $product->quantity = $product->quantity + 1;

                    session()->flash('success', 'Вы успешно увеличили количество товара');

                    return $product;

                }

                if($product->id == $id && $product->quantity === $limit) {

                    session()->flash('warning', 'Вы достигли лимита в ' . $limit . ' кг');

                    return $product;

                }

                return $product;

            });

            session(['cart' => $cart]);

            return back();
        }

        session()->flash('danger', 'Не удалось увеличить количество товара');

        return back();
    }

    public function minus($id)
    {
        $cart = collect(session('cart', []));

        $exist = $cart->contains(function ($cartProduct) use ($id) {
            return $cartProduct->id == $id;
        });

        if($exist) {
            $cart->transform(function ($product) use ($id) {

                $limit = 1;

                if ($product->id == $id && $product->quantity > $limit) {
                    $product->quantity = $product->quantity - 1;

                    session()->flash('success', 'Вы успешно уменьшили количество товара');

                    return $product;
                }

                if($product->id == $id && $product->quantity === $limit) {
                    session()->flash('warning', 'Товар не может быть меньше ' . $limit);

                    return $product;
                }

                return $product;
            });

            session(['cart' => $cart]);

            return back();
        }

        session()->flash('danger', 'Не удалось уменьшить количество товара');

        return back();
    }

    public function store(Product $product)
    {
        $product['quantity'] = 1;

        $cart = collect(session('cart', []));

        $exist = $cart->contains(function ($cartProduct) use ($product) {
            return $cartProduct->id == $product->id;
        });

        if($exist) {
            session()->flash('warning', 'Товар уже добавлен в корзину');

            return back();
        }

        session()->push('cart', $product);

        session()->flash('success', 'Успешное добавление товара в корзину');

        return redirect()->route('cart.index');
    }

    public function destroy(Product $product)
    {
        $cart = collect(session('cart', []));

        $exist = $cart->contains(function ($cartProduct) use ($product) {
            return $cartProduct->id == $product->id;
        });

        if($exist) {
            $filteredCart = $cart->filter(function ($cartProduct) use ($product) {
                return $cartProduct->id !== $product->id;
            });

            session(['cart' => $filteredCart]);

            session()->flash('success', 'Товар успешно удален из корзины');

            return back();
        }

        session()->flash('danger', 'Не удалось удалить товар из корзины');

        return back();
    }

    public function checkout(CheckoutRequest $request)
    {
        $data = $request->validated();

        $data['total'] = $this->getTotalPrice();

        if(auth()->user()) $data['user_id'] = auth()->user()->id;

        if(Str::lower($data['is_wholesale']) === 'да') $data['is_wholesale'] = true;

        else $data['is_wholesale'] = false;

        $result = DB::transaction(function () use ($data) {

            $cart = Cart::query()->create($data);

            $products = collect(session('cart', []));

            foreach ($products as $product) {

                CartProduct::query()->create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->id,
                    'quantity' => $product->quantity,
                ]);

            }

            session()->forget('cart');

            return true;

        }, 3);

        if($result) session()->flash('success', 'Вы успешно оформили заказ');
        else session()->flash('danger', 'Возникла проблема при оформлении заказа');

        return redirect()->route('profile');
    }
}
