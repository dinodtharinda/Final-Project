<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Owner;
use App\Http\Controllers\Controller;

class OwnerController extends Controller
{



    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:owners,email',
            'password' => 'required|min:4|max:30',
        ], [
            'email.exists' => 'This email is not exists on owner table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('owner')-> attempt($creds)) {
            return redirect()->route('owner.index');
        } else {
            return redirect()->back()->with('fail', 'Incorrect creditials');
        }
    }

    function logout(Request $request)
    {
        Auth::guard('owner')->logout();
        return redirect()->route('owner.login');
    }
}
