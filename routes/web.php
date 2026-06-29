<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/',[PostController::class,'index'])->name('feed');
Route::controller(AuthController::class)->group(function(){
     Route::get('/loginPage','showlogin')->name("login.page");
     Route::get('/registerPage','showregister')->name("register.page");
     Route::post('/login','login')->name("login");
     Route::post('/register','register')->name("register");
});
