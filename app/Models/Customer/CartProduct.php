<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\Cart;
use App\Models\Product\Product;

class CartProduct extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected  $fillable = [
        'cart_id',
        'product_id',
        'quantity'
    ];

    public function cart()
    {
        return $this->belongsTo(
            Cart::class,
        );
    }

    public function product()
    {
        return $this->hasOne(
            Product::class,
            'id',
            'product_id'
        );
    }
}
