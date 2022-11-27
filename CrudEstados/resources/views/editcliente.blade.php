@extends('layout')

@section('title')
@endsection

@section('content')
<section class="p-3">
  <form class="form-horizontal" action="{{ route('editar.cliente', $cliente->id) }}" method="POST">
    @csrf
  
    @method('PUT')
  
    @include('componentes.formulario')
  
  </form>
  
  {{-- <a href="{{ route('estados') }}">VER ESTADOS</a>
  
  <br>
  
  <a href="{{ route('cidades') }}">VER CIDADES</a>
  
  <br>
  
  <a href="{{ route('cliente') }}">VER CLIENTES</a> --}}
</section>
@endsection
    
@section('scripts')

@endsection

