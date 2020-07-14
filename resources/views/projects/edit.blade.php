@extends('layout')

@section('title','Create')

@section('content')
	<h2>Editar Proyecto </h2>
	{{-- Errores --}}
	@if( $errors->any() )
		<ul>
			@foreach($errors as $error)
				<li> {{ $error }}</li>
			@endforeach
		</ul>
	@endif

	<form method="POST" action="{{ route('projects.update', $projects) }}">
		@csrf @method('PATCH')
		{{--<input type="hidden" name="_method" value="PATCH">--}}
		<label for="title">
			Titulo del Proyecto
			<input type="text" name="title" value="{{ $projects->title }}">
		</label>
		<br>
		<label for="description">
			Descripción del Proyecto
			<textarea name="description" id="description" cols="30" rows="10">{{ $projects->description }}</textarea>
		</label>
		<br>
		<label for="url">
			Url del Proyecto
			<input type="text" name="url" value="{{ $projects->url }}">

		</label>
		<br>
		<button>Actualizar</button>
	</form>
@endsection