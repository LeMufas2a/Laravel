<?php

use App\Http\Controllers\BiblioController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\UserController;
use App\Models\Image;
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

/* User */

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/users/{id}/delete', [UserController::class, 'destroy']);


/* Bibliothèque */
Route::get('/bibliothèque', [BiblioController::class, 'index'])->name('biblios');
Route::post('/bibliothèque/{id}/delete', [BiblioController::class, 'destroy']);


/* Livres */
Route::get('/livres', [LivreController::class, 'index'])->name('livres');
Route::post('/livres/{id}/delete', [LivreController::class, 'destroy']);


/* Images */
Route::get('/images', [ImageController::class, 'index'])->name('images');
Route::post('/images/{id}/delete', [ImageController::class, 'destroy']);
