<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CommentaireController;
Route::controller(AuthController::class)->group(function(){
     Route::get('/loginPage','showlogin')->name("login.page");
     Route::get('/registerPage','showregister')->name("register.page");
     Route::post('/login','login')->name("login");
     Route::post('/register','register')->name("register");
     Route::get('/logout','logOut')->name('logout');
});
Route::controller(ForgotPasswordController::class)->group(function(){ 
    Route::get('/forget-password/{}',"showForgotForm")->name("password.reset");
    Route::post('/forget-password',"sendEmailPasword")->name("forget.password.post");
});

Route::middleware('auth')->group(function () {
    Route::controller(PostController::class)->group(function(){
          Route::get('/','index')->name('feed');
          Route::get('/upadte-poste/{post}','pageupadtePoste')->name("update.page.poste");
          Route::post('/createP','createPoste')->name("create.poste");
          Route::put('/updateP/{post}', 'upadtePoste')->name("update.poste");
          Route::delete('/deleteP/{post}','deletePoste')->name("delete.poste");
    });
    Route::controller(CommentaireController::class)->group(function(){
          Route::post("/create-com",'createCom')->name("com.create");
          Route::delete("/delete-com/{com}","deleteCom")->name("com.delete");
    });
});
