<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/', [TodoController::class, 'index'])->name('home');
Route::post('/postTodos', [TodoController::class, 'postTodo'])->name('postTodos');
Route::post('/update/{id}', [TodoController::class, 'updateTodo'])->name('update');
Route::get('/status/{id}', [TodoController::class, 'updateStatus'])->name('status');
Route::post('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [TodoController::class, 'delete'])->name('delete');
