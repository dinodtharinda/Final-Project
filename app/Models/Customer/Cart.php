<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\Customer;
use App\Models\Customer\CartProduct;

class Cart extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'date'
    ];

    public function customer()
    {
        return $this->belongsTo(
            Customer::class,
        );
    }

    public function cartproducts()
    {
        return $this->hasMany(
            CartProduct::class,
            'cart_id',
            'id'
        );
    }
}
