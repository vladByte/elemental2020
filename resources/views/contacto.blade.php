@extends('layout')

@section('content')
	<h1>{{ __('contact') }}</h1>
	<h3>Escribenos...</h3>

	<form action="{{ route('emailcontacto.store') }}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
			{!! $errors->first('name','<small>:message</small><br>') !!}

		<input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
			{!! $errors->first('email','<small>:message</small><br>') !!}

		<input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
			{!! $errors->first('subject','<small>:message</small><br>') !!}

		<textarea name="content" id="content" cols="30" rows="10" placeholder="Explica brevemente tu solicitud">{{ old('name') }}</textarea><br>
			{!! $errors->first('content','<small>:message</small><br>') !!}

		<button>Enviar</button>
	</form>
@endsection