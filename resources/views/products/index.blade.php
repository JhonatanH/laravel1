<h1>Produtos</h1>

 <table>
 	<thead>
		 <tr>
		 <th>id</th>
		 <th>title</th>
		 <th>actions</th>
		 </tr>
 	</thead>

 <tbody>
 	@foreach ($data as $product)
	 <tr>
	 <th>{{ $product->id }}</th>
	 <th>{{ $product->title }}</th>
	 <th>
	 	 <a href="{{ route('products.create', 	['id'=>$product->id]) }}">create</a>
		 <a href="{{ route('products.show', 	['id'=>$product->id]) }}">view</a>
		 <a href="{{ route('products.edit', 	['id'=>$product->id]) }}">edit</a>
		 <a href="{{ route('products.destroy', 	['id'=>$product->id]) }}">remove</a>
		</th>
		 </tr>
 	@endforeach
 </tbody>
 </table>