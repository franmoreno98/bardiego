<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();
 Route::get('/', [HomeController::class, 'index']);
 Route::get('/crearReserva', [HomeController::class, 'crearReserva']);
//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::get('/welcome', [HomeController::class, 'index']);
 Route::get('/admin', [AdminController::class, 'index']);
 Route::get('/reservas', [AdminController::class, 'reserva']);
 Route::get('/modificar', [AdminController::class, 'modificar']);
 Route::get('/catering', [AdminController::class, 'catering']);
 Route::get('/disponibilidad', [HomeController::class, 'disponibilidad']);
 Route::get('/login', [LoginController::class, 'login']);
 Route::post('recibirlogin', [LoginController::class, 'recibirlogin']);
 Route::get('logout',[LoginController::class, 'logout']);
 /* Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    Route::get('/home', 'LoginController@index');
  }); */