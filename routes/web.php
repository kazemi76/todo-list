<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TodoController::class,'index'])->name('todos.index');
Route::get('todos/create',[TodoController::class,'create'])->name('todos.create');
Route::get('todos/{todo}',[TodoController::class,'show'])->name('todos.show');
Route::post('todos',[TodoController::class,'store'])->name('todos.store');
Route::get('todos/{todo}/edit',[TodoController::class,'edit'])->name('todos.edit');
Route::put('todos/{todo}',[TodoController::class,'update'])->name('todos.update');
Route::delete('todos/{todo}',[TodoController::class,'delete'])->name('todos.delete');
Route::get('todos/{todo}/complete',[TodoController::class,'complete'])->name('todos.complete');
