<?php

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

/* Partie 1 */

Route::get('/bjr', function () {
    return 'Bonjour cher utilisateur';
});


/* Partie 2 */

Route::get('/about', function () {
    $nom = "Akhtar";
    $prenom = "Mohammed";
    return view('about' , compact("nom", "prenom"));
});




/* Partie 1 route dynamique */
Route::get('/{dynam} ', function ($hey) {
       return "Hello $hey";
    ;
});