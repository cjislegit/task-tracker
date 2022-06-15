<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

//Creates a the /tasks routes and runs the index function in the TaskController file, also names the route tasks.index
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('taks.show');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name(('tasks.edit'));