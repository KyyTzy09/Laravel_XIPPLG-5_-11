<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [LandingController::class, 'Index'])-> name('LandingPage')-> name("landing");
Route::prefix('admin')->name("admin.")->group(function () {
    Route::get('/dashboard', [DashboardController:: class, 'Index' ])-> name('dashboard');

    // Untuk CRUD Students
    Route::resource('students', StudentController::class);
});
