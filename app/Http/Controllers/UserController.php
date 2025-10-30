<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7',
        ],
            [
                'email.required' => 'The Email is required',
                'email.email' => 'Please enter a valid email',
                'password.required' => 'The password is required',
                'password.min' => 'The password must be at least 7 charachters',

            ]
        );
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            echo "you is logged in";
            return;
        }
        else{
            return back()->withErrors(["error"=> "The email or the password is wrong"]);
        }

    }
}
