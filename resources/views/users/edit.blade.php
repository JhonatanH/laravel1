@extends('layouts.admin')
@section('content')

@include('helpers.validate_errors')

<h1 class="page-header">Editando: {{ $data->name }}</h1>


<form action="{{ route('admin.users.update', ['id'=>$data->id]) }}" class="form" method="POST">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <input type="hidden" name="_method" value="PUT">
		 Name: <input type="text" name="name" class="form-control" value="{{ $data->name}}"><br>
		 Email: <input type="email" name="email" class="form-control" value="{{ $data->email }}"><br>
		 Password: <input type="password" name="password" class="form-control" value="">
	 <br>
	 <input type="submit" class="btn btn-primary">
</form>
@endsection