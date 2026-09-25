<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::patch('/tasks/{task}/complete', [TaskController::class, 'markCompleted'])->name('tasks.complete');

Route::resource('tasks', TaskController::class);
