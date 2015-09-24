<h1>Cadastrar usuário</h1>

@include('helpers.validate_errors')

 <form action="{{ route('users.store') }}" method="POST">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 name: <input type="text" name="name"><br>
		 email: <textarea name="email"></textarea><br>
		 password: <input type="text" name="password"><br>
		 <input type="submit">
 </form>
