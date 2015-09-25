@extends('layouts.admin')
@section('content')

<h1>Cadastrar Produto</h1>

@include('helpers.validate_errors')

 <form action="{{ route('admin.products.store') }}" method="POST">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 Title: <input type="text" name="title" value="{{ old('title') }}"><br>
		 Body: <textarea name="body" value="{{ old('body') }}"></textarea><br>
		 Value: <input type="text" name="value" value="{{ old('value') }}"><br>
		 Quantity: <input type="number" name="qtd" value="{{ old('qtd') }}"><br>
		 Url: <input type="text" name="url" value="{{ old('url') }}"><br>
	 <input type="submit">
 </form>
  @endsection
