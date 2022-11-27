<?php

use App\Http\Controllers\Clientes\ClienteController;
use App\Http\Controllers\Clientes\DeleteClienteController;
use App\Http\Controllers\Clientes\EditClientController;
use App\Http\Controllers\FiltroEstadosCidades;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(UserController::class)->group(function(){
    Route::get('/', 'welcome')->name('welcome');
    Route::get('/home', 'index')->name('home');
    Route::get('/home/estados', 'estados')->name('estados');
    Route::get('/home/cidades', 'cidades')->name('cidades');
});

Route::controller(ClienteController::class)->group(function(){
    Route::post('/salvarcliente', 'store')->name('salvar.cliente');
    Route::get('/cliente', 'cliente')->name('cliente');
});

Route::controller(EditClientController::class)->group(function(){
    Route::put('/editclient/{id}', 'editcliente')->name('editar.cliente');
    Route::get('/editclient/{id}', 'vieweditcliente')->name('viewcliente');
});


Route::get('/newform', function(){
    return view('newform');
});
Route::delete('/deletarcliente/{id}', [DeleteClienteController::class, 'destroy'])->name('deletar.cliente');


Route::post('/home/filter', [FiltroEstadosCidades::class, 'filtercity'])->name('filter.city');