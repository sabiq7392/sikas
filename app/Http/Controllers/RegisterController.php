<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [ 
            'title' => 'Register',
        ];

        return view('pages.auth.register', $data);
    }
}
