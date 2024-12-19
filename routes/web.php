<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;

Route::get('/employees', [EmployeeController::class, 'index'])->name('empls.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('empls.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('empls.store');
Route::get('/employees/{empl}', [EmployeeController::class, 'show'])->name('empls.show');
Route::get('/employees/{empl}/edit', [EmployeeController::class, 'edit'])->name('empls.edit');
Route::patch('employees/{empl}', [EmployeeController::class, 'update'])->name('empls.update');
Route::delete('/employees/{empl}', [EmployeeController::class, 'destroy'])->name('empls.destroy');

Route::get('/positions', [PositionController::class, 'index'])->name('positions.index');
Route::get('/positions/create', [PositionController::class, 'create'])->name('positions.create');
Route::post('/positions', [PositionController::class, 'store'])->name('positions.store');
Route::get('/positions/{position}/edit', [PositionController::class, 'edit'])->name('positions.edit');
Route::patch('/positions/{position}', [PositionController::class, 'update'])->name('positions.update');
Route::delete('/positions/{position}', [PositionController::class, 'destroy'])->name('positions.destroy');