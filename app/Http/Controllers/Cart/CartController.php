<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Customer\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class CartController extends Controller
{
    public function index()
    {
        $customer = Auth::user();
        $existsProducts =   $customer->cart->cartproducts;
        $total =0.0;
        foreach($existsProducts as  $existsProduct){
     $total  = $total + $existsProduct->product->unit_price * $existsProduct->quantity;       
        }

        return view('dashboard.customer.cart',['existsProducts'=> $existsProducts,'total'=>$total]);
    }

    public function addProduct(Request $request)
    {

        $customer = Auth::user();
        $existsProducts =   $customer->cart->cartproducts->pluck('product_id')->toArray();

        if (count($existsProducts) > 0) {

            if (in_array($request->id, $existsProducts)) {

                $cart_product = DB::table('cart_products')
                    ->where(['cart_id' => $customer->cart->id, 'product_id' => $request->id])
                    ->first();

                    if($cart_product) {
                        DB::table('cart_products')
                        ->where(['cart_id' => $customer->cart->id, 'product_id' => $request->id])
                        ->update(array('quantity' => $cart_product->quantity + 1));
                    }

            } else {
                $cartProduct = CartProduct::create([
                    'cart_id' => $customer->cart->id,
                    'product_id' => $request->id,
                    'quantity' => 1
                ]);
            }
        } else {
            $cartProduct = CartProduct::create([
                'cart_id' => $customer->cart->id,
                'product_id' => $request->id,
                'quantity' => 1
            ]);
        }
        $data = ['success' => true];
        return response()->json($data, 200);
    }


    public function decrementQuantity(Request $request)
    {

             
        $customer = Auth::user();
        $existsProducts =   $customer->cart->cartproducts->pluck('product_id')->toArray();

        if (count($existsProducts) > 0) {

            if (in_array($request->id, $existsProducts)) {

                $cart_product = DB::table('cart_products')
                    ->where(['cart_id' => $customer->cart->id, 'product_id' => $request->id])
                    ->first();

                    if($cart_product->quantity > 1 ) {
                        DB::table('cart_products')
                        ->where(['cart_id' => $customer->cart->id, 'product_id' => $request->id])
                        ->update(array('quantity' => $cart_product->quantity - 1));
                    }

            } 
        }
        $data = ['success' => true];
        return response()->json($data, 200);
    }





    public function incrementQuantity(Request $request)
    {
        
        $customer = Auth::user();
        $existsProducts =   $customer->cart->cartproducts->pluck('product_id')->toArray();

        if (count($existsProducts) > 0) {

            if (in_array($request->id, $existsProducts)) {

                $cart_product = DB::table('cart_products')
                    ->where(['cart_id' => $customer->cart->id, 'product_id' => $request->id])
                    ->first();

                    if($cart_product) {
                        DB::table('cart_products')
                        ->where(['cart_id' => $customer->cart->id, 'product_id' => $request->id])
                        ->update(array('quantity' => $cart_product->quantity + 1));
                    }

            } 
        }
        $data = ['success' => true];
        return response()->json($data, 200);
    }



    public function removeFromCart($id)
    {

        $customer = Auth::user();
        $existsProducts =   $customer->cart->cartproducts;

        if ($existsProducts) {
            foreach ($existsProducts as $product) {

                if ($product->product_id == $id) {
                    DB::table('cart_products')
                        ->where(['cart_id' => $customer->cart->id, 'product_id' => $id])
                        ->delete();
                }
            }
        }

        return redirect()->route('customer.cart');
    }
}
