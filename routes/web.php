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
    $nav_links = config('nav_links');
    $comics = config('comics');
    return view('home.index', compact('nav_links', 'comics'));
})->name('home');

Route::get('/characters', function () {
    $nav_links = config('nav_links');
    return view('products.characters', compact('nav_links'));
})->name('characters');

Route::get('/comics', function () {
    $nav_links = config('nav_links');
    return view('products.comics', compact('nav_links'));
})->name('comics');

Route::get('/movies', function () {
    $nav_links = config('nav_links');
    return view('products.movies', compact('nav_links'));
})->name('movies');

Route::get('/tv', function () {
    $nav_links = config('nav_links');
    return view('products.tv', compact('nav_links'));
})->name('tv');

Route::get('/games', function () {
    $nav_links = config('nav_links');
    return view('products.games', compact('nav_links'));
})->name('games');

Route::get('/collectibles', function () {
    $nav_links = config('nav_links');
    return view('products.collectibles', compact('nav_links'));
})->name('collectibles');

Route::get('/videos', function () {
    $nav_links = config('nav_links');
    return view('products.videos', compact('nav_links'));
})->name('videos');

Route::get('/fans', function () {
    $nav_links = config('nav_links');
    return view('products.fans', compact('nav_links'));
})->name('fans');

Route::get('/news', function () {
    $nav_links = config('nav_links');
    return view('products.news', compact('nav_links'));
})->name('news');

Route::get('/shop', function () {
    $nav_links = config('nav_links');
    return view('products.shop', compact('nav_links'));
})->name('shop');

    


