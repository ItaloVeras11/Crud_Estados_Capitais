<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClienteFormRequest;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function cliente(){
        
        //$clientes = DB::table('clientes')->get();
        $clientes = Cliente::all();
        return view('cliente', compact('clientes'));
    }

    public function store(CreateClienteFormRequest $request){
        // dd($request->all());
        
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
        $cliente->nascimento = $request->dtnasc;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->telefone = $request->telefone;

        // dd($cliente);
        $cliente->save();
        return redirect('/cliente')->with('success', 'Cliente Criado com sucesso.');

    }
}
