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

Route::get('/about', function () {
    $nav_links = config('nav_links');
    return view('products.about', compact('nav_links'));
    })->name('about');
    


