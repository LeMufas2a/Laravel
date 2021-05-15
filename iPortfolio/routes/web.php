<?php

use App\Http\Controllers\FactController;
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
    return view('portfolio');
})->name('Portfolio');

Route::get('/backoffice', function () {
    return view('backoffice.adminPanel');
})->name('Panel');

Route::get('/backoffice/facts', [FactController::class, 'index'])->name('fact');
Route::post('/backoffice/facts/{id}/delete', [FactController::class, 'delete']);
Route::get('/backoffice/facts/{id}/edit', [FactController::class, 'edit']);
Route::post('/backoffice/facts/{id}/update', [FactController::class, 'update']);