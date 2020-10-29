<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routess
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view("welcome");
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Login Register routes
Auth::routes();

// Route::get("/users", [UsersController::class, "index"]);
Route::resource("users", UsersController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');
