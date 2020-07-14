@extends('layout')

@section('title','Create')

@section('content')
	<h2>Crear Proyecto </h2>
	@if( $errors->any() )
		<ul>
			@foreach($errors as $error)
				<li> {{ $error }}</li>
			@endforeach
		</ul>
	@endif
	<form method="POST" action="{{ route('projects.store') }}">
		@csrf
		<label for="title">
			Titulo del Proyecto
			<input type="text" name="title">
		</label>
		<br>
		<label for="description">
			Descripción del Proyecto
			<textarea name="description" id="description" cols="30" rows="10"></textarea>
		</label>
		<br>
		<label for="url">
			Url del Proyecto
			<input type="text" name="url">

		</label>
		<br>
		<button>Guardar</button>
	</form>
@endsection