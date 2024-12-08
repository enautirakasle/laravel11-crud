<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

// Route::get('/task', [taskController::class, 'index'])->name('task.index');
// Route::get('/task/create', [taskController::class, 'create'])->name('task.create');
// Route::post('/task/store', [taskController::class, 'store'])->name('task.store');
// Route::get('/task/edit/{task}', [taskController::class, 'edit'])->name('task.edit');
// Route::put('/task/update/{task}', [taskController::class, 'update'])->name('task.update');
// Route::get('/task/show/{task}', [taskController::class, 'show'])->name('task.show');
// Route::delete('/task/destroy/{task}', [taskController::class, 'destroy'])->name('task.destroy');

Route::resource('task', TaskController::class);