<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;

Route::get('/', [DashboardController::class, 'index']);
Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'newStudentForm');
    Route::get('/student/{id}', 'show');
    Route::post('/student', 'storeNewStudent')->name("saveStudent");
    Route::patch('/student', 'store');
    Route::delete('/student/{id}', 'destroy');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/department', 'index');
    Route::get('/department/add', 'newDepartmentForm');
    Route::post('/department/add', 'storeNewDepartment')->name("saveDepartment");
});
