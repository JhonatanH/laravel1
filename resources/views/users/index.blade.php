<h1 class="page-header">
	Usuários
	<small><a href="{{ route('users.create') }}" class="btn btn-success btn-xs">novo</a></small>
</h1>

 <table class="table table-hover table-striped">
	 <thead>
		 <tr>
		 <th>id</th>
		 <th>name</th>
		 <th>mail</th>
		 <th class="text-right">actions</th>
		 </tr>
	 </thead>

	 <tbody>
		 @foreach ($data as $k=>$v)
		 <tr>
		 <td>{{ $k+1 }}</td>
		 <td>{{ $v->name }}</td>
		 <td>{{ $v->email }}</td>
		 <td class="text-right">
			 <a href="{{ route('users.show', ['id'=>$v->id]) }}" class="btn btn-xs">view</a>
			 <a href="{{ route('users.edit', ['id'=>$v->id]) }}" class="btn btn-xs">edit</a>
		 <form action="{{ route('users.update', ['id'=>$v->id]) }}" class="form" method="POST" style="display:inline-block">
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <input type="hidden" name="_method" value="DELETE">
			 <input type="submit" value="remove" class="btn btn-danger">
		</form>
		 </td>
		 </tr>
		 @endforeach
	 </tbody>
 </table>
