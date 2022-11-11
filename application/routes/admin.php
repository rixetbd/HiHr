<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::prefix('admin')->controller(AdminController::class)->group(function(){

        Route::get('/', 'index')->name('admin.index');



    });

});
