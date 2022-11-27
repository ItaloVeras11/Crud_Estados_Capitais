<!------ Include the above in your HEAD tag ---------->
@extends('layout')

@section('title')
    Cadastrar Clientes
@endsection

@section('content')
<section class="p-4">
  <form class="" action="{{ route('salvar.cliente') }}" method="POST">
    @csrf
  
    @include('componentes.formulario')
  
  </form>
  
  <a href="{{ route('welcome') }} " class="btn btn-success mt-2" >Voltar</a>
</section>





@endsection

@section('scripts')

@endsection




