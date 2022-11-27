@extends('layout')

@section('title')
    Lista Clientes
@endsection

@section('content')
    <section class="p-3">
        <h1>CLIENTES</h1>
        @if (Session::has('success'))
        <div class=" alert alert-success alert-dismissible" role="alert">
             {{ session('success') }}
        </div>
        @endif
        
        <section class="">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Cidades</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Nascimento</th>
                        <th scope="col">Açoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->cpf }}</td>
                            <td>{{ $cliente->cidade }}</td>
                            <td>{{ $cliente->estado }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td>{{ $cliente->nascimento }}</td>
                            <td><a href={{ route('viewcliente', $cliente->id) }} class="btn btn-primary">Editar</a></td>
                            <td>
                                <form action="{{ route('deletar.cliente', $cliente->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </section>
@endsection
