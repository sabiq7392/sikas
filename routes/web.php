<?php

use App\Http\Controllers\AddBoxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\CashierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsDashboardController;
use App\Http\Controllers\CategoryDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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

Route::get('/kolom', [AddBoxController::class, 'index'])->middleware('auth');
Route::resource('/boxes', BoxController::class)->middleware('auth');


Route::resource('/cashiers', CashierController::class)->middleware('auth');

Route::resource('/users', UserController::class)->middleware('auth');

Route::resource('/items', ItemsDashboardController::class)->middleware('auth');
Route::resource('/categories', CategoryDashboardController::class)->middleware('auth');
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'registration'])->middleware('guest');
