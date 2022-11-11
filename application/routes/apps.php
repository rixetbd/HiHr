<?php

use App\Http\Controllers\Apps\AppsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::prefix('apps')->controller(AppsController::class)->group(function(){

        Route::get('/chat', 'chat')->name('apps.chat');
        Route::get('/file-manager', 'file_manager')->name('apps.file_manager');



    });

});
