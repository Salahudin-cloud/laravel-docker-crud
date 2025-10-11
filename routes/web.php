<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;

Route::get('/', [DashboardController::class, 'index']);
Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'newStudentForm');
    Route::get('/student/{id}', 'show');
    Route::post('/student', 'store');
    Route::patch('/student', 'store');
    Route::delete('/student/{id}', 'destroy');
});
