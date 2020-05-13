@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">
	<a href="{{ route('product.index') }}">
		<span class="glyphicon glyphicon-fast-backward"></span>
		Voltar
	</a>
	Produto: <b>{{$product->name}}</b>
</h1>
<p>Ativo: <b>{{$product->active}}</b></p>
<p>Number: <b>{{$product->number}}</b></p>
<p>Categoria: <b>{{$product->category}}</b></p>
<p>Descrição: <b>{{$product->description}}</b></p>

<hr>

@if(isset($errors) && count($errors)>0)
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	</div>
@endif

{!! Form::open(['route' => ['product.destroy', $product->id], 'method' => 'delete']) !!}
	{!! Form::submit("Deletar Produto: $product->name", ['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection