<h1>Categories</h1>

<table>
	<thead>
		<tr>
		<th>id</th>
		<th>title</th>
		<th>actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($data as $k=>$v)
			<tr>
				<td>{{ $k+1 }}</td>
				<td>{{ $v->title }}</td>
				<td>
				<a href="{{ route('categories.create', 	['id'=>$v->id]) }}">create</a>
				<a href="{{ route('categories.show', ['id'=>$v->id]) }}">view</a>
				<a href="{{ route('categories.edit', ['id'=>$v->id]) }}">edit</a>
				<form action="{{ route('categories.update', ['id'=>$v->id]) }}" method="20 " style="display:inline-block">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="DELETE">
					<input type="submit" value="remove">
				</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>