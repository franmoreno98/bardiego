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
 Route::post('/crearReserva', [App\Http\Controllers\HomeController::class, 'crearReserva']);
 Route::post('enviarcorreo/{email_reserva}}',[HomeController::class, 'enviarcorreo']);
Route::get('/admin', [AdminController::class, 'index']);
 Route::get('/reservas', [AdminController::class, 'reserva']);
 Route::get('/modificar', [AdminController::class, 'modificar']);
 Route::get('/disponibilidad', [HomeController::class, 'disponibilidad']);
 Route::delete('/borrar/{id_reserva}', [AdminController::class, 'borrar']);
 Route::get('/actualizar/{id_reserva}' ,[AdminController::class, 'actualizar']);
 Route::put('/modificarReserva/{id_reserva}' ,[AdminController::class, 'modificarReserva']);
 Route::get('/login', [LoginController::class, 'login']);
 Route::post('recibirlogin', [LoginController::class, 'recibirlogin']);
 Route::get('logout',[LoginController::class, 'logout']);

 

