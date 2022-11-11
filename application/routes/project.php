<?php

use App\Http\Controllers\Project\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::prefix('project')->controller(ProjectController::class)->group(function(){

        Route::get('/', 'index')->name('project.index');
        Route::get('/tasks', 'tasks')->name('project.tasks');
        Route::get('/task-board', 'task_board')->name('project.task_board');



    });

});
