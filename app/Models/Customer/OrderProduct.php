<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\CustomerOrder;
use App\Models\Product\Product;

class OrderProduct extends Model
{
    use HasFactory;


    public function order()
    {
        return $this->belongsTo(
            CustomerOrder::class,
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
