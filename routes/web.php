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


// Pagina HOME
Route::get('/', function () {
    return view('welcome');
})->name('home');


// Pagina COMICS
Route::get('/comics', function () {


    $data = [
        'comics' => config('comicsdb')
    ];

    return view('comics', $data);
})->name('comics');



// Pagina NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');
