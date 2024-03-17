<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('Accueil');
Route::get('/emploi-du-temps', function () {
    return view('pages.emploiDuTemps');
})->name('Emploi du temps');

Route::get('/evenements', function () {
    return view('pages.evenements');
})->name('Evenements');

Route::get('/actualites', function () {
    return view('pages.actualites');
})->name('Actualités');

Route::get('/autres', function () {
    return view('pages.autres');
})->name('Autres');
