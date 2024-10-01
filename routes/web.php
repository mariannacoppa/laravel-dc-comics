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
    $comics = config('db');
    $shops = config('dbshops');
    $dcs = config('dbdcs');
    $sites = config('dbsites');
    return view('home', compact('comics', 'shops', 'dcs', 'sites'));
})->name('homepage');

// Route::get('/', function () {
//     $shops = config('dbshops');
//     return view('home', compact('shops'));
// })->name('homepage');