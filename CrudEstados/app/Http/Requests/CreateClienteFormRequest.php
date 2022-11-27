<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:3'],
            'cpf' => ['required', 'min:11', 'unique:clientes,cpf'],
            'email'=> ['required','unique:clientes,email'],
            'telefone'=> ['required', 'unique:clientes,telefone']
        ];
    }

    public function messages(){
        return [
            'required'=>'O campo :attribute é Obrigtorio', 
            'nome.min'=>'Este campo necessita no minimo 3 characters',                  
            'cpf.min'=>'CPF invalido',
            'email.unique'=>'O Email ja esta Cadastrado', 
            'cpf.unique'=>'O CPF ja esta Cadastrado',
            'telefone.unique'=>'Este telefone ja esta Cadastrado '         
    ]; 
    }
}
