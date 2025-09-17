<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('password.index');
    }

    public function generate(Request $request)
    {
        $length = $request->input('length', 12);

        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = substr(str_shuffle(str_repeat($characters, $length)), 0, $length);

        return view('password.index', compact('password', 'length'));
    }
}