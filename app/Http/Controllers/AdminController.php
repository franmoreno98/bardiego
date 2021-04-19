<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function reservas(){
        return view('reservas');
    }

    public function modificar(){
        return view('modificar');
    }

    public function catering(){
        return view('catering');
    }

    public function reserva() {

        $listaReservas = DB::table('tbl_reserva')->get();
        // dd($listaReservas);
         return view('reservas', compact('listaReservas'));
    }

    public function borrar($id_reserva) {
        //return $id;
        DB::table('tbl_reserva')->Where('id_reserva', '=', $id_reserva)->delete();
        //envio a la ruta mostrar
        return redirect('reservas'); 
    }
    public function actualizar($id_reserva) {
        $listaReservas=DB::table('tbl_reserva')->Where('id_reserva', '=', $id_reserva)->first();
        return view('actualizar', compact('listaReservas'));
    }

    public function modificarReserva($id_reserva,Request $request){
        //recibir los datos del formulario
        $listaReservas=request()->except('_token','Enviar','_method');
        //return $datos;
        //actualizar bd
        DB::table('tbl_reserva')->where('id_reserva', '=', $id_reserva)->update($listaReservas);
        //ir a mostrar
        return redirect('reservas');
    }
}