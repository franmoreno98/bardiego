<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Mail\RecibirMensaje;

use Illuminate\Support\Facades\Mail;



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
 Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
 Route::get('/admin', [LoginController::class, 'mostrar']);
 Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
 Route::get('/', [HomeController::class, 'index']);
 Route::get('/welcome', [HomeController::class, 'index']);
 Route::get('/admin', [AdminController::class, 'index']);
 Route::get('/reservas', [AdminController::class, 'reserva']);
 Route::get('/modificar', [AdminController::class, 'modificar']);
 Route::delete('/borrar/{id_reserva}', [AdminController::class, 'borrar']);
 Route::post('/crearReserva', [HomeController::class, 'crearReserva']);
 Route::get('/disponibilidad', [HomeController::class, 'disponibilidad ']);
 Route :: post ('/conozcanos', [AdminController ::class, 'conozcanos']);
 Route :: post ('/menu1', [AdminController ::class, 'menu1']);
 Route :: post ('/menu2', [AdminController ::class, 'menu2']);
 Route :: post ('/menu3', [AdminController ::class, 'menu3']);
 Route :: post ('/carta1', [AdminController ::class, 'carta1']);
 Route :: post ('/carta2', [AdminController ::class, 'carta2']);
 Route :: post ('/carta3', [AdminController ::class, 'carta3']);
 Route :: post ('/galeria1', [AdminController ::class, 'galeria1']);
 Route :: post ('/galeria2', [AdminController ::class, 'galeria2']);
 Route :: post ('/galeria3', [AdminController ::class, 'galeria3']);
 Route :: post ('/galeria4', [AdminController ::class, 'galeria4']);
 Route :: post ('/galeria5', [AdminController ::class, 'galeria5']);
 Route :: post ('/galeria6', [AdminController ::class, 'galeria6']);
 Route::put('/modificarReserva/{id_reserva}' ,[AdminController::class, 'modificarReserva']);
 Route::post('/EnviarCorreo', [App\Http\Controllers\HomeController::class, 'EnviarCorreo']);
 Route::get('/actualizar/{id_reserva}' ,[AdminController::class, 'actualizar']);
 Route::get('/login', [LoginController::class, 'login']);
 Route::post('recibirlogin', [LoginController::class, 'recibirlogin']);
 Route::get('logout',[LoginController::class, 'logout']);