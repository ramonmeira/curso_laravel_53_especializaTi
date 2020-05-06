@extends('site.templates.template1')

@section('content')

<h1>Home page do site! - {{$var1}}</h1>

@if($var1 == '123')
<p>É igual</p>
@else
<p>É diferente</p>
@endif

@unless($var1 == '1234')
<p>É diferente...unless</p>
@endunless

@for($i = 0; $i < 10; $i++)
	<p>For: {{$i}}</p>
@endfor

@foreach($arrayData as $array)
	<p>Foreach: {{$array}}</p>
@endforeach

@forelse($arrayData as $array)
	<p>Forelse: {{$array}}</p>
@empty
	<p>Vazio</p>
@endforelse

{{--Comentário--}}

@php
@endphp

@include('site.includes.sidebar', compact('var1'))

@endsection

@push('scripts')
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush