@extends('layout')

@section('title', 'Portafolio | ' . $projects->title)

@section('content')

	<table border="1">
		<tr style="font-weight: bold,  ">
			<th>Title</th>
			<th>Description</th>
			<th>Created_at</th>
			<th>Acciones</th>
		</tr>
		<tr>
			<td width="200px">{{ $projects->title }}</td>
			<td width="500px">{{ $projects->description }}</td>
			<td width="200px">{{ $projects->created_at->diffForHumans() }}</td>
			<td width="200px"><a href="{{ route('projects.edit', $projects) }}">Editar</a></td>
		</tr>
	</table>
@endsection
