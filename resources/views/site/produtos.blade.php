<html>
<head>
	<title>teste</title>

</head>
<body>
	<ol>
	@foreach($produtos as $produto)
		<li>{{ $produto->title}}</li>
		<a href="{{ route('produtos.show', ['id'=>$produto->id]) }}" class="btn btn-xs">Ver</a>
		<!-- <button type="submit">Ver</button> -->
	@endforeach
	</ol>

</body>
</html>