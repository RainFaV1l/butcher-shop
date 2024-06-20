<?php

namespace App\Http\Controllers;

use App\Http\Requests\Reviews\StoreRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::query()->where('is_published', true)->get();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Review::query()->create($data);

        session()->flash('success', 'Ваш отзыв успешно отправлен на модерацию.');

        return redirect()->route('reviews.index');
    }
}
