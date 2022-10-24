<?php

use App\Http\Controllers\Backend\SLoginController;
use Illuminate\Support\Facades\Route;


Route::controller(SLoginController::class)->group(function(){

    Route::get('/login/google', 'login_google')->name('login.google');
    Route::get('/login/facebook', 'login_facebook')->name('login.facebook');


    Route::any('/login/google/callback', 'callback_google')->name('callback.google');
    Route::any('/login/facebook/callback', 'callback_facebook')->name('callback.facebook');

});

