<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // 👈 Importamos TaskController

Route::get('/tasks/create', [TaskController::class, 'create']) -> name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store']) -> name('task.store');

// CRUD de Tareas
Route::resource('tasks', TaskController::class);
