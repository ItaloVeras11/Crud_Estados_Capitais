@extends('layout')

@section('title')
    Pagina Inicial
@endsection

@section('content')

<h1 class=" text-center jumbotron">LARAVEL CRUD</h1>

{{-- <div class="alert alert-success" role="alert">teste</div> --}}

<div class="p-4">
    <a href="{{ route('estados') }} " class="pt-2 btn btn-success " >VER ESTADOS</a>
    
    
    
    <a href="{{ route('cidades') }}" class="pt-2 btn btn-success ">VER CIDADES</a>
    
    
    
    <a href="{{ route('home') }}" class="pt-2 btn btn-success ">CADASTAR CLIENTES</a>


    <a href="{{ route('cliente') }}" class="pt-2 btn btn-success ">VER CLIENTES</a>
</div>

{{-- <div class="d-grid gap-3">
    <div class="pt bg-light border">Grid item 1</div>
    <div class="pt bg-light border">Grid item 2</div>
    <div class="pt bg-light border">Grid item 3</div>
</div>

<div class="mx-auto" style="width: 200px;">
    Centered element
</div> --}}


@endsection