<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\RecibirMensaje;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    //reservar mesas ypoder ver horas y dias disponibles para reservar 
    public function crearReserva(Request $request)
    
    {
        
        $co="o.menguaal@gmail.com";
    //    $datos = array('message'=>"hola esto es una prueba1"); // A variable which can be use inside email blade template.
    //    $enviar=new RecibirMensaje($datos);
    //    $enviar->sub="mensaje de oscar";
    //    Mail::to($co)->send($enviar);
        $datos=$request->except('_token','Enviar');
       

     
        $con=DB::table('tbl_reserva')->where([['fecha_reserva','=',$datos['fecha_reserva']],['hora_reserva','=',$datos['hora_reserva']]])->count();

        // print_r($con);
        // die;
        if ($con==0) {
            DB::table('tbl_reserva')->insertGetId(['nombre_reserva'=>$datos['nombre_reserva'],'apellido_reserva'=>$datos['apellido_reserva'],'email_reserva'=>$datos['email_reserva'],'telefono_reserva'=>$datos['telefono_reserva'], 'mensaje_reserva'=>$datos['mensaje_reserva'], 'fecha_reserva'=>$datos['fecha_reserva'], 'hora_reserva'=>$datos['hora_reserva'], 'personas_reserva'=>$datos['personas_reserva']]);
            
            $nombre_Reserva=$datos['nombre_reserva'];
            $apellido_Reserva=$datos['apellido_reserva'];
            $email_Reserva=$datos['email_reserva'];
            $telefono_Reserva=$datos['telefono_reserva'];
            $mensaje_Reserva=$datos['mensaje_reserva'];
            $fecha_Reserva=$datos['fecha_reserva'];
            $hora_Reserva=$datos['hora_reserva'];
            $personas_Reserva=$datos['personas_reserva'];

            $msg= "Reserva hecha a nombre de $nombre_Reserva $apellido_Reserva para $personas_Reserva personas, para el día $fecha_Reserva a las $hora_Reserva";
            $msg=$msg." Mensaje personalizado: $mensaje_Reserva";



            $datos = array('message'=>$msg); // A variable which can be use inside email blade template.
            $enviar=new RecibirMensaje($datos);
            $enviar->sub="Nueva Reserva";
            Mail::to($co)->send($enviar);
            return redirect('/');
        }else{
            print_r($con);
           
        }
        {
            // $co='llaravelp@gmail.com';


       
        }
    }

    // public function disponibilidad(Request $request){

    //     $datos=$request->except('_token','Enviar');
    //     $hora = DB::table('tbl_reserva')->where([['hora_reserva','=',$datos['hora_reserva']]]);
    //     $disponible = [];
    //     $horasReserva = ['08:00-09:00','09:00-10:00','10:00-11:00','11:00-12:00','12:00-13:00','14:00-15:00','15:00-16:00','16:00-17:00'];
    //     $horasBD = ['08:00-09:00','09:00-10:00','16:00-17:00'];
    //     for ($i=0; $i < count($horasReserva); $i++) { 
    //         if (!in_array($horasReserva[$i], $horasBD)) {
    //             array_push($disponible, $horasReserva[$i]);
    //         }

    //     }
    //     print_r($disponible) ;
    //     return response()->json($disponible, 200);

    //     //$horaBD = ;
    // }

    public function disponibilidad(Request $request)
    {
        $datos=$request->except('_token','Enviar');
        $filtro = $request->input('filtro');
        $dia=$request->input('dia');
        $personas=$request->input('personas');
        //query para busacar las horas disponibles para la mesa seleccionada y la fecha seleccionada
        $query="SELECT distinct qrymfh.num_mesa, qrymfh.hora_franja, qryr.fecha
                FROM
                (SELECT m., fh. FROM tbl_mesa m, tbl_franja_horaria fh where m.num_mesa = ".'1'." ORDER BY m.num_mesa, fh.hora_franja) as qrymfh
                LEFT JOIN 
                (SELECT r.* FROM tbl_reserva r WHERE r.fecha = ".$dia.") as qryr
                on (qrymfh.id_mesa = qryr.id_mesa) and (qrymfh.id_franja_horaria = qryr.id_franja_horaria) where isnull(qryr.fecha)";

        return response()->json($query, 200);

    }

}
