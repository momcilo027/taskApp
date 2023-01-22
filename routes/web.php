<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tasksController;

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

Route::get('/', [tasksController::class, 'startup']);
Route::post('/tasks', [tasksController::class, 'store']);
Route::put('/task/{id}/edit', [tasksController::class, 'edit']);
Route::delete('/task/{id}/delete', [tasksController::class, 'destroy']);