@extends('site.templates.template1')

@section('content')

<h1>Home page do site! - {{$teste}}</h1>
<h2>Sub - {{$teste2}}</h2>
<h3>Section - {{$teste3}}</h3>
<h4>{{$var1 or 'Não existe'}}</h4>

@endsection