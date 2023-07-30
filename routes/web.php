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
    return '<h1>HomePage</h1> <a href="/about">About </a>';
});

Route::get('/about', function () {
    return '<h1>About page</h1> <a href="/"> Home </a>';
});
