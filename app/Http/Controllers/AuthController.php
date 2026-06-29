<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showregister(){
        return view('auth.register');
    }
    public function showlogin(){
        return view("auth.login");
    }
    public function register(Request $request){

    }
    public function login(Request $request){
    }
}
