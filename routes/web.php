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
    $utility = config('utility');
    $comics = config('comics');
    return view('home', $utility, compact('comics'));
})->name('homepage');

Route::get('/this-comic/{id}', function($id) {
    $utility = config('utility');
    $comics = config('comics');
    $comic = $comics[$id];
    return view('this-comic', $utility, compact('comic'));
})->name('this-comic');