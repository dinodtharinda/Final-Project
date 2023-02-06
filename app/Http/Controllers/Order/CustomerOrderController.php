<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerOrderController extends Controller
{
    public function index()
    {
        $customer = Auth::user();
        $existsProducts =   $customer->order;

    

        return view('dashboard.customer.order')->with('existsOrder', $existsProducts);
    }

    public function addOrder()
    {
        return '3453';
    }
}
