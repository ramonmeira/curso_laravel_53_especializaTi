@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">Listagem dos produtos</h1>

<a href="{{route('product.create')}}" class="btn btn-primary btn-add">
	<span class="glyphicon glyphicon-plus"></span> Cadastrar
</a>

<table class="table table-striped">
	<tr>
		<th>Nome</th>
		<th>Descrição</th>
		<th width="100px">Ações</th>
	</tr>
	@foreach($products as $product)
	<tr>
		<td>{{$product->name}}</td>
		<td>{{$product->description}}</td>
		<td>
			<a href="{{route('product.edit',$product->id)}}" class="actions edit">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
			<a href="{{ route('product.show',$product->id) }}" class="actions delete">
				<span class="glyphicon glyphicon-eye-open"></span>
			</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection