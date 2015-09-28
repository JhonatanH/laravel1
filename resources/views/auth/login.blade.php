@extends('layouts.login')

@section('content')
	<h1 class="page-header text-center">Autenticação</h1>

@if (count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

	<!-- <h1 class="page-header text-center">{{ bcrypt('123456') }}</h1> -->
	<form method="POST" action"/admin/auth/login" class="col-md-4 col-md-offset-4">
		{!! csrf_field() !!}
		<div>
			Email
			<input type="email" name="email" value="{{ old('email') }}" class="form-control">
		</div>
		<div>
			Senha
			<input type="password" name="password" id="password" class="form-control">
		</div>
		<div>
			<input type="checkbox" name="remember"> Lembrar-me
		</div>
		<div>
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	</form>
@endsection