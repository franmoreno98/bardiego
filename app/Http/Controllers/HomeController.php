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

        //DB::table('tbl_reserva')->insertGetId(['nombre_reserva'=>$datos['nombre_reserva'],'apellido_reserva'=>$datos['apellido_reserva'],'email_reserva'=>$datos['email_reserva'],'telefono_reserva'=>$datos['telefono_reserva'],'motivo_reserva'=>$datos['motivo_reserva'], 'mensaje_reserva'=>$datos['mensaje_reserva'], 'fecha_reserva'=>$datos['fecha_reserva'], 'hora_reserva'=>$datos['hora_reserva'], 'personas_reserva'=>$datos['personas_reserva']]);

        //$con=DB::table('tbl_reserva')->where('fecha_reserva', '=', $datos['fecha_reserva'], 'hora_reserva', '=', $datos['hora_reserva'], )->count();
        $con=DB::table('tbl_reserva')->where([['fecha_reserva','=',$datos['fecha_reserva']],['hora_reserva','=',$datos['hora_reserva']]])->count();

        // print_r($con);
        // die;
        if ($con==0) {
            DB::table('tbl_reserva')->insertGetId(['nombre_reserva'=>$datos['nombre_reserva'],'apellido_reserva'=>$datos['apellido_reserva'],'email_reserva'=>$datos['email_reserva'],'telefono_reserva'=>$datos['telefono_reserva'], 'mensaje_reserva'=>$datos['mensaje_reserva'], 'fecha_reserva'=>$datos['fecha_reserva'], 'hora_reserva'=>$datos['hora_reserva'], 'personas_reserva'=>$datos['personas_reserva']]);
            return redirect('/#section4');
        }else{
            return redirect('/#section4');
        }

        
        
    }

    public function disponibilidad(Request $request){

        $datos=$request->except('_token','Enviar');
        $hora = DB::table('tbl_reserva')->where([['hora_reserva','=',$datos['hora_reserva']]]);
        $disponible = [];
        $horasReserva = ['08:00-09:00','09:00-10:00','10:00-11:00','11:00-12:00','12:00-13:00','14:00-15:00','15:00-16:00','16:00-17:00'];
        $horasBD = ['08:00-09:00','09:00-10:00','16:00-17:00'];
        for ($i=0; $i < count($horasReserva); $i++) { 
            if (!in_array($horasReserva[$i], $horasBD)) {
                array_push($disponible, $horasReserva[$i]);
            }

        }
        print_r($disponible) ;
        return response()->json($disponible, 200);

        //$horaBD = ;
    }

}
