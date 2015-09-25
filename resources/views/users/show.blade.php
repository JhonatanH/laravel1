@extends('layouts.admin')
@section('content')

<h1 class="page-header">{{ $data->name }}</h1>

 <ul>
	 <li>email: {{ $data->email }}</li>
	 <li>cadastro: {{ $data->created_at }}</li>
	 <li>atualização: {{ $data->updated_at }}</li>
 </ul>
 @endsection