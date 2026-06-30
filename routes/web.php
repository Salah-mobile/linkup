<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::controller(AuthController::class)->group(function(){
     Route::get('/loginPage','showlogin')->name("login.page");
     Route::get('/registerPage','showregister')->name("register.page");
     Route::post('/login','login')->name("login");
     Route::post('/register','register')->name("register");
     Route::get('/logout','logOut')->name('logout');
});
Route::middleware('auth')->group(function () {
    Route::controller(PostController::class)->group(function(){
          Route::get('/','index')->name('feed');
          Route::get('/upadte-poste','pageupadtePoste')->name("update.page.poste");
          Route::post('/createP','createPoste')->name("create.poste");
          Route::put('/updateP', 'upadtePoste')->name("update.poste");
          Route::delete('/deleteP','deletePoste')->name("delete.poste");
    });
});
