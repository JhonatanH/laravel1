@extends('layouts.admin')
@section('content')

<h1 class="page-header">
	Produtos
	<small><a href="{{ route('admin.products.create') }}" class="btn btn-success btn-xs">Novo</a></small>
</h1>

 <table class="table table-hover table-striped">
 	<thead>
		 <tr>
		 <th>ID</th>
		 <th>Título</th>
		 <th class="text-right">Ações</th>
		 </tr>
 	</thead>

 <tbody>
 	@foreach ($data as $product)
	 <tr>
	 <th>{{ $product->id }}</th>
	 <th>{{ $product->title }}</th>
 <td class="text-right">
			 <a href="{{ route('admin.products.show', ['id'=>$product->id]) }}" class="btn btn-xs">Ver</a>
			 <a href="{{ route('admin.products.edit', ['id'=>$product->id]) }}" class="btn btn-xs">Editar</a>
			 <a href="{{ route('products.categories', ['id'=>$product->id]) }}" class="btn btn-xs">Relações</a>
		 <form action="{{ route('admin.products.update', ['id'=>$product->id]) }}" class="form" method="POST" style="display:inline-block">
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <input type="hidden" name="_method" value="DELETE">
			 <input type="submit" value="Remover" class="btn btn-danger">
		</form>
		 </td>
		 </tr>
		 @endforeach
	 </tbody>
 </table>
 @endsection