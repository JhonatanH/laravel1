@extends('layouts.admin')
@section('content')

<h1 class="page-header">{{ $data->title }}</h1>

<ul>
	<li>title: {{ $data->title }}</li>
	<li>cadastro: {{ $data->created_at }}</li>
	<li>atualização: {{ $data->updated_at }}</li>
</ul>
<br><br>
 <form action="{{ route('admin.categories.update', ['id'=>$data->id]) }}" class="form" method="POST" style="display:inline-block">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <input type="hidden" name="_method" value="DELETE">
	 <input type="submit" value="remove">
 </form>
  @endsection