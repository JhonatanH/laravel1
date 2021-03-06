@extends('layouts.admin')
@section('content')

<h1>Editando {{ $data->title }}</h1>

@include('helpers.validate_errors')

 <form action="{{ route('admin.products.update', ['id'=>$data->id]) }}"method="POST">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <input type="hidden" name="_method" value="PUT">
		 Title: <input type="text" name="title" value="{{ $data->title }}"><br>
		 Description: <textarea name="body">{{ $data->body }}</textarea><br>
		 Value: <input type="number" name="value" value="{{ $data->value }}"><br>
		 Quantity: <input type="number" name="qtd" value="{{ $data->qtd }}"><br>
		 Url: <input type="text" name="url" value="{{ $data->url }}"><br>
	 <input type="submit">
 </form>
 @endsection