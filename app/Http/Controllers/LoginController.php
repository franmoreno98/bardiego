<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Listeners\DeleteSessionData;

class LoginController extends Controller
{
    public function login(){
        $this->borrarReservaVencida();
        return view('login');
    }

    public function mostrar() {
        if(!(session()->has('usuario'))){
            return redirect ('/');
        } else {
            return view ('admin');
        }
    }

    public function recibirlogin(Request $request){
        $datos = $request->except('_token', 'Enviar', '_method');
        $users=DB::table('admin')->where([['usuario', '=', $datos['usuario']],['passwd', '=', $datos['passwd']]])->count();
        if ($users == 1) {
            $request-> session()-> put('usuario', $request['usuario']);
            return redirect('admin');
        } else {
            return redirect('/');
        }
    }

    public function logout(){
        session()->flush();
        session()->forget(['usuario']);
        return redirect('/');
    }

    public function borrarReservaVencida(){
        if(session()->has('usuario'))
        {
        DB::table('tbl_reserva')->where('fecha_reserva', '<', date("Y/m/d"))->delete();
        }
    }

}

