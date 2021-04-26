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
    /* public function crearReserva(Request $request)
    
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

            $msg= "Reserva hecha a nombre de $nombre_Reserva $apellido_Reserva para $personas_Reserva personas, para el día $fecha_Reserva a las $hora_Reserva.";
            $msg=$msg." El cliente ha querido dejar este mensaje: $mensaje_Reserva";
            $msg2= "Has realizado tu reserva, el día $fecha_Reserva a las $hora_Reserva";




            $datos = array('message'=>$msg); // A variable which can be use inside email blade template.
            $datos2 = array('message'=>$msg2); // A variable which can be use inside email blade template.
            $enviar=new RecibirMensaje($datos);
            $enviar2=new RecibirMensaje($datos2);
            $enviar->sub="Nueva Reserva";
            Mail::to($co)->send($enviar);
            Mail::to($email_Reserva)->send($enviar2);

            return redirect('/');
        }else{
            print_r($con);
           
        }
        
    } */

    

    public function EnviarCorreo(Request $request){

        $co="extreamlewis@gmail.com";
        $datos=$request->except('_token','Enviar');


        // DB::table('tbl_reserva')->insertGetId(['nombre_reserva'=>$datos['nombre_reserva'],'email_reserva'=>$datos['email_reserva'],'telefono_reserva'=>$datos['telefono_reserva'], 'mensaje_reserva'=>$datos['mensaje_reserva']]);

        $nombre_Reserva=$datos['nombre_reserva'];
        $email_Reserva=$datos['email_reserva'];
        $telefono_Reserva=$datos['telefono_reserva'];
        $mensaje_Reserva=$datos['mensaje_reserva'];

        $msg=" El cliente $nombre_Reserva con el email $email_Reserva y telefono $telefono_Reserva, ha querido dejar este mensaje: $mensaje_Reserva";




        $datos = array('message'=>$msg); // A variable which can be use inside email blade template.
        $enviar=new RecibirMensaje($datos);
        $enviar->sub="Nueva Mensaje de $nombre_Reserva";
        Mail::to($co)->send($enviar);
        return redirect('/');


    }

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

    public function crearReserva(Request $request){
        $datos=$request->except('_token','Enviar');
        $co="extreamlewis@gmail.com";
        $con1="";
        $con2="";
        $cantidad_mesa = "";
        if ($datos['personas_reserva']<=2) {
            $cantidad_mesa="2";
            $con1=DB::table('tbl_reserva')
            ->where('fecha_reserva', '=', $datos['fecha_reserva'])
            ->where('hora_reserva', '=', $datos['hora_reserva'])
            ->where('cantidad_mesa', '=', $cantidad_mesa)
            ->count();
            // print_r($cantidad_mesa);
            // die;
        }elseif ($datos['personas_reserva']>2) {
            $cantidad_mesa="4";
            $con2=DB::table('tbl_reserva')
            ->where('fecha_reserva', '=', $datos['fecha_reserva'])
            ->where('hora_reserva', '=', $datos['hora_reserva'])
            ->where('cantidad_mesa', '=', $cantidad_mesa)
            ->count();
            // print_r($cantidad_mesa);
            // die;
        }

        if ($con1==3) {
            $mensaje = "No hay mesas disponibles a esa hora.";
            return redirect('/#section4')->with("mensaje", $mensaje);
        }elseif($con2==5){
            $mensaje = "No hay mesas disponibles a esa hora.";
            return redirect('/#section4')->with("mensaje", $mensaje);
        }else{
            $mensaje = "Reserva hecha correctamente.";
            DB::table('tbl_reserva')->insertGetId(['nombre_reserva'=>$datos['nombre_reserva'],'apellido_reserva'=>$datos['apellido_reserva'],'email_reserva'=>$datos['email_reserva'],'telefono_reserva'=>$datos['telefono_reserva'], 'mensaje_reserva'=>$datos['mensaje_reserva'], 'fecha_reserva'=>$datos['fecha_reserva'], 'hora_reserva'=>$datos['hora_reserva'], 'personas_reserva'=>$datos['personas_reserva'], 'cantidad_mesa'=>$cantidad_mesa]);
            //envia correo
            $nombre_Reserva=$datos['nombre_reserva'];
            $apellido_Reserva=$datos['apellido_reserva'];
            $email_Reserva=$datos['email_reserva'];
            $telefono_Reserva=$datos['telefono_reserva'];
            $mensaje_Reserva=$datos['mensaje_reserva'];
            $fecha_Reserva=$datos['fecha_reserva'];
            $hora_Reserva=$datos['hora_reserva'];
            $personas_Reserva=$datos['personas_reserva'];
            //mensaje que recive
            $msg= "Reserva hecha a nombre de $nombre_Reserva $apellido_Reserva para $personas_Reserva personas, para el dÃ­a $fecha_Reserva a las $hora_Reserva";
            $msg=$msg." Mensaje personalizado: $mensaje_Reserva";
            $msg2= "Has realizado tu reserva, el día $fecha_Reserva a las $hora_Reserva";


            $datos = array('message'=>$msg); // A variable which can be use inside email blade template.
            $datos2 = array('message'=>$msg2); // A variable which can be use inside email blade template.
            $enviar=new RecibirMensaje($datos);
            $enviar2=new RecibirMensaje($datos2);
            $enviar->sub="Nueva Reserva";
            Mail::to($co)->send($enviar);
            Mail::to($email_Reserva)->send($enviar2);
            return redirect('/#section4')->with("mensaje", $mensaje);

        }
    }
}



