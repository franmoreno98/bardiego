<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    //reservar mesas ypoder ver horas y dias disponibles para reservar 
    public function crearReserva(Request $request)
    {
        $datos=$request->except('_token','Enviar');
        //print_r($datos);
        // die;
        DB::table('tbl_reserva')->insertGetId(['nombre_reserva'=>$datos['nombre_reserva'],'apellido_reserva'=>$datos['apellido_reserva'],'email_reserva'=>$datos['email_reserva'],'telefono_reserva'=>$datos['telefono_reserva'],'motivo_reserva'=>$datos['motivo_reserva'], 'mensaje_reserva'=>$datos['mensaje_reserva'], 'fecha_reserva'=>$datos['fecha_reserva'], 'hora_reserva'=>$datos['hora_reserva'], 'personas_reserva'=>$datos['personas_reserva']]);
        return redirect('/');
    }

}
