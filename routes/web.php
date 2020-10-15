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
    return view('backend.dashboard');
});

Route::get('/users', function () {
    return view('backend.pages.users.index');
});

Route::get('/roles', function () {
    return view('backend.pages.users.index');
});

Route::get('/permission', function () {
    return view('backend.pages.users.index');
});


