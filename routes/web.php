<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/reservas', [AdminController::class, 'reserva']);
Route::get('/modificar', [AdminController::class, 'modificar']);
Route::get('/catering', [AdminController::class, 'catering']);
