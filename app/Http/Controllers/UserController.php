<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Irsyad A. Panjaitan',
                'phone' => '038382382323',
                'twitter' => 'irsyadadl'
            ],
            [
                'name' => 'James',
                'phone' => '01293824',
                'twitter' => 'jamesm'
            ],
            [
                'name' => 'Steve Schoger',
                'phone' => '3292393223',
                'twitter' => 'steveschoger',
            ],
        ];
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
