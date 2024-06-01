<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'preview',
        'name',
        'description',
        'developed_date',
        'price',
        'in_stock',
    ];

    public function getImageUrlAttribute(): string
    {
        return asset(Storage::url($this->preview));
    }

    public function carts(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(Cart::class, 'cart_products', 'product_id', 'cart_id');
    }
}
