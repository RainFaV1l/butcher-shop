<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $products = Product::query()->where('in_stock', true)->get();

        return view('index.home', compact('products'));
    }
}
