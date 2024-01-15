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
    $comics = config('comics');
    $shop = config('shop');
    return view('home.index', compact('comics', 'shop'));
})->name('home');

Route::get('/characters', function () {
    return view('products.characters',);
})->name('characters');

Route::get('/comics', function () {
    
    return view('products.comics', );
})->name('comics');

Route::get('/movies', function () {
    
    return view('products.movies', );
})->name('movies');

Route::get('/tv', function () {
    
    return view('products.tv', );
})->name('tv');

Route::get('/games', function () {
    
    return view('products.games', );
})->name('games');

Route::get('/collectibles', function () {
    
    return view('products.collectibles', );
})->name('collectibles');

Route::get('/videos', function () {
    
    return view('products.videos', );
})->name('videos');

Route::get('/fans', function () {
    
    return view('products.fans', );
})->name('fans');

Route::get('/news', function () {
    
    return view('products.news', );
})->name('news');

Route::get('/shop', function () {
    
    return view('products.shop', );
})->name('shop');

    


