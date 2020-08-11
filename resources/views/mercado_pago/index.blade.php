@extends('layout')

@section('content')


<h3>Datos del Usuario</h3>
<a href="https://api.mercadopago.com/users/TU_ID_DE_USUARIO/mercadopago_account/balance?access_token=TU_TOKEN_DE_ACCESO" title="">Datos del Usuario</a>

<h3>Datos del Usuario Prueba</h3>
<a href="https://api.mercadopago.com/users/Meriton345/mercadopago_account/balance?access_token=TEST-77618776228919-081020-e004265dd4c1e946a7f8c400fb4bf61b-429328806" title="">Datos del Usuario</a>


{{-- Librerias --}}
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
@endsection