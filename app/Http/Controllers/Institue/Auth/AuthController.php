<?php

namespace App\Http\Controllers\Institue\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(){
        return view('institue.auth.login');
    }

    public function register(){
        return view('admin.auth.register');
    }
}
