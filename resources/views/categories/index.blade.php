@extends('layouts.admin')
@section('content')

<h1 class="page-header">
	Categorias
	<small><a href="{{ route('admin.categories.create') }} " class="btn btn-success btn-xs">Novo</a></small>
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
		@foreach ($data as $k=>$v)
			<tr>
				<td>{{ $k+1 }}</td>
				<td>{{ $v->title }}</td>
				<td class="text-right">
				<a href="{{ route('admin.categories.show', ['id'=>$v->id]) }} " class="btn btn-xs">Ver</a>
				<a href="{{ route('admin.categories.edit', ['id'=>$v->id]) }} " class="btn btn-xs">Editar</a>
				<form action="{{ route('admin.categories.update', ['id'=>$v->id]) }}" method="20 " style="display:inline-block">
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