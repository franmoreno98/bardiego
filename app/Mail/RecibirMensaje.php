<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecibirMensaje extends Mailable
{
    use Queueable, SerializesModels;
    public $sub;
    public $datos;
    /*
     * Create a new message instance.
     *
     * @return void
     */
    //https://parzibyte.me/blog/2020/01/17/enviar-correo-laravel-ejemplo/
    public function __construct($datos)
    {
        $this->datos=$datos;


    }

    /*
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   return $this->view('emails.correomio')->subject($this->sub);
    }
}
