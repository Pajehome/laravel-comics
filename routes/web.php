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
    $comic = config('comics');
    return view('home',['comic'=> $comic]);
});

Route::get('/shop', function () {
    $comic = config('comics');
    return view('shop',['comic' => $comic]);
});