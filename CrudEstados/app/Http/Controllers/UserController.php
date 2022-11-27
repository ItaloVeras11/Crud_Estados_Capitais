<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $estados = DB::table('estados')->get();
        return view('home', compact('estados'));
    }

    public function welcome(){
        return view('welcome');
    }

    public function estados(){
        $estados = DB::table('estados')->get();
        return view('estados', compact('estados'));
    }

    public function cidades(){
        $cidades = DB::table('cidades')->get();
        return view('cidades', compact('cidades'));
    }
}
