<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/task', [TaskController::class, 'index'])->name('tasks.index');
route::get('/task/create', [TaskController::class, 'create'])->name('tasks.create');
route::get('/task/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');



