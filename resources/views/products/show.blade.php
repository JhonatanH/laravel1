@extends('layouts.admin')
@section('content')

<h1 class="page-header">{{ $data->title }}</h1>

 <ul>
	 <li>value: {{ $data->value }}</li>
	 <li>qtd: {{ $data->qtd }}</li>
	 <li>url: {{ $data->url }}</li>
	 <li>cadastro: {{ $data->created_at }}</li>
	 <li>atualização: {{ $data->updated_at }}</li>
 </ul>
 <hr>
 <p>Description</p>
 {{ $data->body }}

<br><br>
 <form action="{{ route('admin.products.update', ['id'=>$data->id]) }}" class="form" method="POST" style="display:inline-block">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <input type="hidden" name="_method" value="DELETE">
	 <input type="submit" value="remove">
 </form>
  @endsection