<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'surname',
        'phone',
        'is_wholesale',
        'total',
        'completion_date',
        'status',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(Product::class, 'cart_products', 'cart_id', 'product_id');
    }

    public function cartProducts(): \Illuminate\Database\Eloquent\Relations\hasMany
    {
        return $this->hasMany(CartProduct::class, 'cart_id');
    }
}
