@extends('layout')

@section('title')
    Cidades
@endsection

@section('content')
    
<h1>CIDADES</h1>
<ul class="list-group">
    @foreach ($cidades as $cidade)
        <li class="list-group-item">{{ $cidade->nome }}</li>
    @endforeach
</ul>
    
@endsection