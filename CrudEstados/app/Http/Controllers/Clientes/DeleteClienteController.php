<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class DeleteClienteController extends Controller
{
    public function destroy($id){
        //dd($request);
        $cliente = Cliente::find($id);
        //dd($cliente);
        $cliente->delete();
        return redirect()->route('home');

    }
}
