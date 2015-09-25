@extends('layouts.admin')
@section('content')

@include('helpers.validate_errors')

<h1>Editando {{ $data->name }}</h1>

<form action="{{ route('admin.categories.update', ['id'=>$data->id]) }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
		Title: <input type="text" name="title" value="{{ $data->title }}"><br>
	<input type="submit">
</form>
 @endsection