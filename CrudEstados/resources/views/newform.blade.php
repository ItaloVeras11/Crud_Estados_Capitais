@extends('layout')

@section('content')
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome</span>
        <input type="text" class="form-control" placeholder="Nome Cliente" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Email</span>
        <input type="email" class="form-control" placeholder="Email Cliente" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
        
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Telefone</span>
        <input type="text" class="form-control" placeholder="Telefone" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
    </div>

    

    <div class="input-group mb-3">
        <span class="input-group-text">CPF</span>
        <input type="text" class="form-control" placeholder="CPF" aria-label="Username">
        <span class="input-group-text">Data Nascimento</span>
        <input type="text" class="form-control" placeholder="Data Nascimento" aria-label="Server">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Cidade</span>
        <input type="text" class="form-control" placeholder="Cidade" aria-label="Username">
        <span class="input-group-text">Estado</span>
        <input type="text" class="form-control" placeholder="Estado" aria-label="Server">
    </div>

   
@endsection
