<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FiltroEstadosCidades extends Controller
{
    public function filtercity(Request $request){
        $estadoId = $request->id;

        $cidades = DB::table('cidades')->where('estado_id', $estadoId)->get();

        return response()->json($cidades, 200);
    }
}
