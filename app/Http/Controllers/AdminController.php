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
}
