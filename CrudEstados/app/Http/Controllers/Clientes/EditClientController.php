<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class EditClientController extends Controller
{
    public function vieweditcliente($id)
    {
        $cliente = Cliente::find($id);
        //dd($cliente);
        return view('editcliente', compact('cliente'));
    }

    public function editcliente(Request $request, $id)
    {
        //dd($request->all());
        $cliente = $request->all();

        if (!$clientesalvo = Cliente::find($id)){
            return 'falhou' ;
        }

    //$data = $request->all();
    $clientesalvo->update($cliente);

    return redirect()->route('home')->with('msg', 'Cliente ' . $clientesalvo->name . ' editado(a) com sucesso');

    }
}
