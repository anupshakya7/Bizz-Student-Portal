<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

//Register Route
Route::get('/', [UserController::class,"register"])->name('register');
Route::post('/', [UserController::class,"registerSubmit"])->name('register.submit');

//Login Route
Route::get('/login', [UserController::class,"login"])->name('login');
Route::post('/login', [UserController::class,"loginSubmit"])->name('login.submit');

//Dashboard Route
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

//About Us Page
Route::get('/about-us', [DashboardController::class,'about'])->name('about');
