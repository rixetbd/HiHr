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

    Route::prefix('employee')->controller(EmployeeController::class)->group(function(){

        Route::get('/', 'index')->name('employee.index');
        Route::get('/all', 'all')->name('employee.all');
        Route::get('/holidays', 'holidays')->name('employee.holidays');
        Route::get('/profile', 'profile')->name('employee.profile');
        Route::get('/leaves', 'leaves')->name('employee.leaves');
        Route::get('/leave-settings', 'leave_settings')->name('employee.leave.settings');
        Route::get('/attendance', 'attendance')->name('employee.attendance');
        Route::get('/departments', 'departments')->name('employee.departments');
        Route::get('/designations', 'designations')->name('employee.designations');
        Route::get('/timesheet', 'timesheet')->name('employee.timesheet');
        Route::get('/overtime', 'overtime')->name('employee.overtime');
        Route::get('/salary', 'salary')->name('employee.salary');
        Route::get('/salary-settings', 'salary_settings')->name('employee.salary_settings');
        Route::get('/salary-view', 'salary_view')->name('employee.salary_view');

    });

});
