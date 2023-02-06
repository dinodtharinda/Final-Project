<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer\Cart;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.customer.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'add_no' => 'required|min:4|',
            'street' => 'required|min:4|',
            'city' => 'required|min:4|',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|same:cpassword|min:4|max:30',
            'cpassword' => 'required|min:4|max:30',
        ]);
        try {
            $customer = Customer::create([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'address_no' => $request->input('add_no'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' => \Hash::make($request->input('password')),
                'date' => date(now())




            ]);
            if ($customer->id != null) {
                $cart = Cart::create([
                    'customer_id' => $customer->id,
                    'date' =>  date(now())
                ]);
            }
            return redirect()->back()->with('success', 'You are now Registered Successfully');
        } catch (e) {
            return redirect()->back()->with('fail', 'Something went Wrong');
        }
    }


    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|min:4|max:30',
        ], [
            'email.exists' => 'This email is not exists on Customer table'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($creds)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('fail', 'Incorrect creditials');
        }
    }

    function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        return redirect()->route('customer.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
