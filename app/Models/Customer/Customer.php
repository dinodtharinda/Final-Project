<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Customer\Cart;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Customer\CustomerOrder;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'fname',
        'lname',
        'address_no',
        'city',
        'street',
        'email',
        'password',
        'date'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

     public function cart()
     {
         return $this->hasOne(
             Cart::class,
             'customer_id',
             'id'
         );
     }


     public function order()
     {
         return $this->hasMany(
             CustomerOrder::class,
             'customer_id',
             'id'
         );
     }
    
 
 
}
