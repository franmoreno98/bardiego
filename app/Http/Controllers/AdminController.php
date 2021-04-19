<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    // public function update(Request $request, $id_reserva)
    // {
    //     $listaReservas=request()->except(['_token','_method']);
        
    //     if($request->hasFile('Foto')){

    //         $reserva= Admin::findOrFail($id_reserva);

    //         Storage::delete('public/'.$reserva->Foto);

    //         $listaReservas['Foto']=$request->file('Foto')->store('uploads','public');
    //     }
        
    //     Admin::where('id_reserva','=',$id_reserva)->update($listaReservas);

    //     $reserva= Admin::findOrFail($id_reserva);
    //     return view('modificar', compact('reserva'));
    // }
    public function conozcanos(Request $request){
        if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/conozcanos.jpg');
                        return redirect('modificar');
                    }
        }

        public function menu1(Request $request){

            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/menu1.jpg');
                        return redirect('modificar');
                    }
        }

        public function menu2(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/menu2.jpg');
                        return redirect('modificar');
                    }
        }

        public function menu3(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/menu3.jpg');
                        return redirect('modificar');
                    }
        }

        public function galeria1(Request $request){

            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/galeria1.jpg');
                        return redirect('modificar');
                    }
        }

        public function galeria2(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/galeria2.jpg');
                        return redirect('modificar');
                    }
        }

        public function galeria3(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/galeria3.jpg');
                        return redirect('modificar');
                    }
        }

        public function galeria4(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/galeria4.jpg');
                        return redirect('modificar');
                    }
        }

        public function galeria5(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/galeria5.jpg');
                        return redirect('modificar');
                    }
        }

        public function galeria6(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/galeria6.jpg');
                        return redirect('modificar');
                    }
        }

        public function img_header(Request $request){
            
            if($_FILES['foto']['name']){
             $fileinfo = $_FILES['foto']; 
            
                        $filepath = $fileinfo['tmp_name'];    // Ruta donde está guardado temporalmente el fichero
                        $filename = $fileinfo['name']; // Nombre que tenía el fichero cuando se envió
                       move_uploaded_file($filepath,'../storage/app/public/uploads/'.$filename);
                       rename ( '../storage/app/public/uploads/'.$filename, '../storage/app/public/uploads/img_header.jpg');
                        return redirect('modificar');
                    }
        }
}
