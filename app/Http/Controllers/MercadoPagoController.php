<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MercadoPago\SDK as MercadoPagoSDK;

class MercadoPagoController extends Controller
{
	/**
	 *  Consulta de la informacion del cliente.
	 */
    public function index(){

    	// Agrega credenciales
        $amp = MercadoPago\SDK::setAccessToken('TEST-77618776228919-081020-e004265dd4c1e946a7f8c400fb4bf61b-429328806');

    	return view('mercado_pago.index');
    }
}
