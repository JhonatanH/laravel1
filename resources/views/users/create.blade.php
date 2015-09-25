@extends('layouts.admin')
@section('content')

@include('helpers.validate_errors')

<h1 class="page-header">Cadastrar usuário</h1>

 <form action="{{ route('admin.users.store') }}" method="POST">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 name: <input type="text" name="name"><br>
		 email: <textarea name="email"></textarea><br>
		 password: <input type="text" name="password"><br>
		 <input type="submit">
 </form>
@endsection