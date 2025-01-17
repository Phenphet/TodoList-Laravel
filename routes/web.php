<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\TodoController;
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

Route::get('/', [TodoController::class, 'Index'])->name('Home');
Route::post('/todo/insert', [TodoController::class, 'Insert'])->name('add');
Route::post('/todo/delete', [TodoController::class, 'Delete'])->name('delete');
