@extends('layout')

@section('title','Portafolio')

@section('content')

	<h1>@lang('Portfolio')</h1>
	<li > <a href="{{ route('projects.create') }}">Crear Proyecto</a> </li>
	<ul>
		@forelse($projects as $project)
			<li> <a href="{{ route('projects.show',$project) }}">{{ $project->title }} </a></li>
			@empty
			<li>No hay mas proyectos para mostrar</li>
		@endforelse
		{{ $projects->links() }}
	</ul>

@endsection
