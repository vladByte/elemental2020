<?php

namespace App\Http\Controllers;

use App\Mail\ContactoRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactoController extends Controller
{
    public function store()
    {
    	$mensaje =  request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => ['required', 'min:3' ]
    	],[
    		'name.required' => __('I need your name')
    	]);
    	// Envio de correo
    	Mail::to('vlad.jerez@gmail.com')->queue(new ContactoRecibido($mensaje));
    	return 'Mensaje Enviado';
    }

    public fucntion solicitudInfo()
    {
        $mensaje = request()->validate([
            "name" => "required",
            "email" => "required|email",
            "curso" => "required",
            "cod" => "required",
            "phone" => "required",
            "body" => "required|min:10", 
        ]); 

        Mail::to($mensaje['email'])->queue(new InfoSend($mensaje));
        return 'Mensaje Enviado';
    }
}
