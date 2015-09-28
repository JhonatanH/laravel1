@extends('layouts.admin')
@section('content')

<h1>Cadastrar Produto</h1>

@include('helpers.validate_errors')

 <form action="{{ route('admin.products.store') }}" method="POST">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <label>Título</label> 
		 <input type="text" name="title" value="{{ old('title') }}" class="form-control"><br>
		 <label>Corpo</label> 
		 <textarea name="body" value="{{ old('body') }}" class="form-control"></textarea><br>
		 <label>Valor</label> 
		 <input type="text" name="value" value="{{ old('value') }}" class="form-control"><br>
		 <label>Quantidade</label> 
		 <input type="number" name="qtd" value="{{ old('qtd') }}" class="form-control"><br>
		 <label>URL</label> 
		 <input type="text" name="url" value="{{ old('url') }}" class="form-control"><br>
	 <input type="submit">
 </form>
  @endsection