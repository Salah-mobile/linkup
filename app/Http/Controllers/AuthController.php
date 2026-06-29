<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function showregister(){
        return view('auth.register');
    }
    public function showlogin(){
        return view("auth.login");
    }
    public function register(Request $request){
        $request->validate([
            "name"=>"required|max:255",
            "email"=>"required|email",
            "password"=>"required|min:8|confirmed",
        ]);
       $user=User::Create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        Auth::login($user);
        return to_route("feed");
    }
    public function login(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:8"
        ]);
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return to_route("feed");
    }
}
