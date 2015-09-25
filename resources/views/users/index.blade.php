@extends('layouts.admin')
@section('content')

<h1 class="page-header">
	Usuários
	<small><a href="{{ route('admin.users.create') }}" class="btn btn-success btn-xs">Novo</a></small>
</h1>

 <table class="table table-hover table-striped">
	 <thead>
		 <tr>
		 <th>ID</th>
		 <th>Nome</th>
		 <th>Email</th>
		 <th class="text-right">Ações</th>
		 </tr>
	 </thead>

	 <tbody>
		 @foreach ($data as $k=>$v)
		 <tr>
		 <td>{{ $k+1 }}</td>
		 <td>{{ $v->name }}</td>
		 <td>{{ $v->email }}</td>
		 <td class="text-right">
			 <a href="{{ route('admin.users.show', ['id'=>$v->id]) }}" class="btn btn-xs">Ver</a>
			 <a href="{{ route('admin.users.edit', ['id'=>$v->id]) }}" class="btn btn-xs">Editar</a>
		 <form action="{{ route('admin.users.update', ['id'=>$v->id]) }}" class="form" method="POST" style="display:inline-block">
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
