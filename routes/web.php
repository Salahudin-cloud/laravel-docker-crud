<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'newStudentForm');
    Route::get('/student/{id}', 'updateStudentForm')->name('toUpdateStudentForm');
    Route::post('/student', 'storeNewStudent')->name("saveStudent");
    Route::patch('/student/{id}', 'updateStudent')->name("updateStudent");
    Route::delete('/student/{id}', 'destroy');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/department', 'index');
    Route::get('/department/add', 'newDepartmentForm');
    Route::post('/department/add', 'storeNewDepartment')->name("saveDepartment");
});
