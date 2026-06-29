<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/',[PostController::class,'index'])->name('feed');
Route::controller([AuthController::class])->groupe(function(){
     Route::get('/loginPage','AuthController@showlogin')->name("login.page");
     Route::get('/registerPage','AuthController@register')->name("register.page");
     Route::post('/login','AuthController@login')->name("login");
     Route::post('/register','AuthController@register')->name("register");
});
