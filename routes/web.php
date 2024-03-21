<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\TodoController;

Route::get('/', [ViewController::class, 'welcome']);

Route::get('show', [TodoController::class, 'show'])->name('show');

Route::delete('show', [TodoController::class, 'delete']);

Route::get('create', [ViewController::class, 'create']);

Route::post('create', [TodoController::class, 'create']);

Route::get('edit', [TodoController::class, 'edit']);

Route::patch('edit', [TodoController::class, 'update']);