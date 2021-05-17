<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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


Route::get('users', [UserController::class, 'index'])->name('users');
Route::post('/users/{id}/delete', [UserController::class, 'delete']);
Route::get('/users/{id}/show', [UserController::class, 'show']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::post('/users/{id}/update', [UserController::class, 'update']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::post('/users/{id}/download', [UserController::class, 'download']);


Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::post('/services/{id}/delete', [ServiceController::class, 'delete']);
Route::get('/services/{id}/show', [ServiceController::class, 'show']);
Route::get('/services/{id}/edit', [ServiceController::class, 'edit']);
Route::post('/services/{id}/update', [ServiceController::class, 'update']);
Route::get('/services/create', [ServiceController::class, 'create']);
Route::post('/services/store', [ServiceController::class, 'store']);
Route::post('/services/{id}/download', [ServiceController::class, 'download']);