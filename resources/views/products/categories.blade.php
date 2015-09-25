@extends('layouts.admin')
@section('content')

<h1>Produtos de {{ $data->title }}</h1>

<form action="{{ route('products.categories', ['id'=>$data->id]) }}" class="form" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<ul>
	@foreach ($categories as $k=>$category)
		<li>
		<input type="checkbox" name="categories[]" value="{{$k}}" >
		@if (!empty($checked[$k])) 
			checked 
		@endif
		{{$category}}
		</li>
	@endforeach
	</ul>
	<input type="submit" class="btn btn-primary">
</form>
 @endsection