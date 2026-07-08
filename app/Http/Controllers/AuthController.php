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
        if( Auth::attempt(['email' => $request->email, 'password' => $request->password])){
             $request->session()->regenerate();
             return to_route("feed");
        }
        return  redirect()->back()->withErrors(
           [
             "email"=>"email incorrect",
             "password"=>"password incorrect"
           ]
        )->withInput();
    }
    public function logOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route("register.page");
    }
}
