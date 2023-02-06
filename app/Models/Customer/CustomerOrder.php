<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\OrderProduct;
use App\Models\Customer\Customer;

class CustomerOrder extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'is_inquiry',
        'order_status',
        'date'
    ];

    public function customer()
    {
        return $this->belongsTo(
            Customer::class,
        );
    }

    public function orderproducts()
    {
        return $this->hasMany(
            OrderProduct::class,
            'order_id',
            'id'
        );
    }

}
