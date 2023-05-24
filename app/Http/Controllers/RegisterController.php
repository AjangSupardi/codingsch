<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('unify.auth.register');
    }

    public function registerUser(Request $request)
    {
        dd($request->all());
    }
}
