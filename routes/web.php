<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::get('/todos', [TodoController::class, 'postTodo']);
Route::post('/todos/update/{id}', [TodoController::class, 'updateTodo']);
Route::get('/todos/status/{id}', [TodoController::class, 'updateStatus']);
Route::post('/todos/edit/{id}', [TodoController::class, 'edit']);
Route::get('/todos/delete/{id}', [TodoController::class, 'delete']);
