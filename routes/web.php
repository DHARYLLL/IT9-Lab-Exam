<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::Post('/task', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/{task}/update', [TaskController::class, 'update'])->name('task.update');
Route::delete('/task/{task}/destroy', [TaskController::class, 'destroy'])->name('task.destroy');
