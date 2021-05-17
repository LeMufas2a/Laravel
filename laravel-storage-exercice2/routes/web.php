<?php

use App\Http\Controllers\CaracteristiqueController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\PortfolioController;
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


Route::get('portfolios', [PortfolioController::class, 'index'])->name('portfolios');
Route::post('/portfolios/{id}/delete', [PortfolioController::class, 'delete']);
Route::get('/portfolios/{id}/show', [PortfolioController::class, 'show']);
Route::get('/portfolios/{id}/edit', [PortfolioController::class, 'edit']);
Route::post('/portfolios/{id}/update', [PortfolioController::class, 'update']);
Route::get('/portfolios/create', [PortfolioController::class, 'create']);
Route::post('/portfolios/store', [PortfolioController::class, 'store']);
Route::post('/portfolios/{id}/download', [PortfolioController::class, 'download']);


Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::post('/services/{id}/delete', [ServiceController::class, 'delete']);
Route::get('/services/{id}/show', [ServiceController::class, 'show']);
Route::get('/services/{id}/edit', [ServiceController::class, 'edit']);
Route::post('/services/{id}/update', [ServiceController::class, 'update']);
Route::get('/services/create', [ServiceController::class, 'create']);
Route::post('/services/store', [ServiceController::class, 'store']);
Route::post('/services/{id}/download', [ServiceController::class, 'download']);

Route::get('galeries', [GalerieController::class, 'index'])->name('galeries');
Route::post('/galeries/{id}/delete', [GalerieController::class, 'delete']);
Route::get('/galeries/{id}/show', [GalerieController::class, 'show']);
Route::get('/galeries/{id}/edit', [GalerieController::class, 'edit']);
Route::post('/galeries/{id}/update', [GalerieController::class, 'update']);
Route::get('/galeries/create', [GalerieController::class, 'create']);
Route::post('/galeries/store', [GalerieController::class, 'store']);
Route::post('/galeries/{id}/download', [GalerieController::class, 'download']);

Route::get('caracteristiques', [CaracteristiqueController::class, 'index'])->name('caracteristiques');
Route::post('/caracteristiques/{id}/delete', [CaracteristiqueController::class, 'delete']);
Route::get('/caracteristiques/{id}/show', [CaracteristiqueController::class, 'show']);
Route::get('/caracteristiques/{id}/edit', [CaracteristiqueController::class, 'edit']);
Route::post('/caracteristiques/{id}/update', [CaracteristiqueController::class, 'update']);
Route::get('/caracteristiques/create', [CaracteristiqueController::class, 'create']);
Route::post('/caracteristiques/store', [CaracteristiqueController::class, 'store']);
Route::post('/caracteristiques/{id}/download', [CaracteristiqueController::class, 'download']);