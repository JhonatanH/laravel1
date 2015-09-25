@extends('layouts.admin')
@section('content')

<h1>Cadastrar</h1>

@include('helpers.validate_errors')

<form action="{{ route('admin.categories.store') }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		Title: <input type="text" name="title" value="{{ old('title') }}"><br>
	<input type="submit">
</form>
 @endsection