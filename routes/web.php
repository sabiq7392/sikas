<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ItemsDashboardController;
use App\Http\Controllers\CategoryDashboardController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', [IndexController::class, 'index']);
// Route::get('/items', [ItemsController::class, 'index']);
// Route::get('/items/detail/{id}', [ItemsController::class, 'show']);
// Route::get('/items/create', [ItemsController::class, 'create']);
// Route::post('/items', [ItemsController::class, 'store']);
// Route::get('/items/edit/{id}', [ItemsController::class, 'edit']);
// Route::put('/items/detail/{id}', [ItemsController::class, 'update']);

Route::resource('/item', ItemsDashboardController::class);
Route::resource('/category', CategoryDashboardController::class);
Route::get('/auth/login', [LoginController::class, 'index']);

// Route::get('/table', [DataController::class, 'stats']);
// Route::get('/data-table', [DataController::class, 'data']);