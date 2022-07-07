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
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index')->middleware('auth');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create')->middleware('auth');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show')->middleware('auth');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name(('tasks.edit'))->middleware('auth');
Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->middleware('auth');
Route::post('tasks', [TaskController::class, 'store']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.delete')->middleware('auth');

Auth::routes([

]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');