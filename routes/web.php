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

Route::get('/positions', [PositionController::class, 'index'])->name('posits.index');
Route::get('/positions/create', [PositionController::class, 'create'])->name('posits.create');
Route::post('/positions', [PositionController::class, 'store'])->name('posits.store');
Route::get('/positions/{posit}/edit', [PositionController::class, 'edit'])->name('posits.edit');
Route::patch('/positions/{posit}', [PositionController::class, 'update'])->name('posits.update');
Route::delete('/positions/{posit}', [PositionController::class, 'destroy'])->name('posits.destroy');