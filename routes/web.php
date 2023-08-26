<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentContorller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    

    Route::get('/logout',[AuthController::class,'destroy'])->name('logout');

    Route::controller(AdminController::class)->group(function(){

        Route::get('/dashboard', 'dashboard')->name('admin.dasboard');

    });

    Route::controller(StudentContorller::class)->group(function(){

        Route::get('/student', 'GetStudent')->name('get.student');

        Route::get('/student/add', 'AddStudent')->name('add.student');

        Route::post('/store/student', 'StoreStudent')->name('store.student');

        Route::get('/student/edit/{id}', 'EditStudent')->name('edit.student');

        Route::post('/update/{id}', 'UpdateStudent')->name('update.student');

        Route::get('/student/delete/{id}','DeleteStudent')->name('delete.student');

    });

    Route::controller(ClassController::class)->group(function(){

        Route::get('/class','GetClass')->name('get.class');

        Route::get('/class/add','AddClasses')->name('add.class');

        Route::post('/class/store','StoreClasses')->name('store.class');

        Route::get('/class/edit/{id}','EditClasses')->name('edit.class');

        Route::post('/class/update/{id}','UpdateClasses')->name('update.class');

        Route::get('/class/delete/{id}','DeleteClasses')->name('delete.class');

    });

    Route::controller(AttendanceController::class)->group(function(){

        Route::get('/attendance','Getattendance')->name('get.attendance');

        Route::get('/attendance/add','AddAttendance')->name('add.attendance');

        Route::post('/attendance/store','StoreAttendance')->name('store.attendance');

        Route::get('/attendance/edit/{id}','EditAttendance')->name('edit.attendance');

        Route::post('/attendance/update/{id}','UpdateAttendance')->name('update.attendance');

        Route::get('/attendance/delete/{id}','DeleteAttendance')->name('delete.attendance');

    });
});
