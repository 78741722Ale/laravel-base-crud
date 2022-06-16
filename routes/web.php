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
    return view('home');
})->name('home');

/* Rotte per il CRUD di Comics */
Route::get('/comics', 'ComicController@index')->name('comics.index'); // Rotta per l'index di Comics
Route::get('/comics/create', 'ComicController@create')->name('comics.create'); // Rotta per il form create di Comics
Route::get('/comics', 'ComicController@store')->name('comics.store'); // Rotta per lo store di Comics
Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show'); // Rotta per lo show del singolo fumetto

/* Scorciatoia per poter generare tutte e sette le rotte di Comics */
/* Route::resource('/comics', 'ComicController'); */



