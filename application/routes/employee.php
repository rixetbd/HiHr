<?php

use App\Http\Controllers\Employee\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){


    Route::get('/all-employee', function (){

        return view('employee.all_employee');

    });

    Route::prefix('employee')->controller(EmployeeController::class)->group(function(){

        Route::get('/all', 'all')->name('employee.all');
        Route::get('/holidays', 'holidays')->name('employee.holidays');
        Route::get('/profile', 'profile')->name('employee.profile');
        Route::get('/leaves', 'leaves')->name('employee.leaves');
        Route::get('/attendance', 'attendance')->name('employee.attendance');
        Route::get('/salary', 'salary')->name('employee.salary');
        Route::get('/salary-view', 'salary_view')->name('employee.salary_view');

    });

});
