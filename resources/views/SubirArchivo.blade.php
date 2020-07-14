@extends('layout')

@section('content')
	<hr>
	 <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
	 	@csrf
		<div class="row">
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
	</form>
@endsection