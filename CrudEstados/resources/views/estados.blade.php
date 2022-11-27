@extends('layout')

@section('title')
    Estados
    
@endsection

@section('content')
    
<h1>ESTADOS</h1>

<ul class="list-group">
    @foreach ($estados as $estado)
    <li class="list-group-item">{{ $estado->id }} - {{ $estado->nome }}</li>
    
    @endforeach
</ul>
@endsection


