<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientes';
    protected $fillable = ['nome', 'cpf', 'email', 'cidade', 'estado', 'telefone', 'nascimento'];

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = $this->clearCpfString($value);
    }

    public function getCpfAttribute($value)
    {
        if($value != null ){

            return $this->formatCpf($value);
        }
        else{
            return null;
        }
    }

    protected function clearCpfString($text)
    {
        if($text != null ){

            return str_replace(['.', '-', ' ', '/'], '', $text);
        }
        else{
            return null;
        }
    }

    public function formatCpf($cpf)
    {
        if (strlen($cpf) <= 11) {
            return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, -2);
        } else {
            $cnpj = $cpf;
            return substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' .
                substr($cnpj, -2);
        }
    }

     // CAMPO TELEFONE

     public function setPhoneAttribute($value)
     {
         $this->attributes['telefone'] = $this->clearStringForInteger($value);
     }
     public function getPhoneAttribute($value)
     {
         // dd($value);
         if($value !=null){
             return $this->formatIntegerForNumberPhone($value);
         }
         else{
             return null;
         }
     }
     // functions optionais
     protected function clearStringForInteger($txt)
     {
         // dd($txt);
         if($txt != null){
             return (int) str_replace(['/', '-', '(', ')', ' ', '.'], '', $txt);
         }
         else{
             return null;
         }
     }
 
     public function formatIntegerForNumberPhone($int)
     {
         $ddd = substr($int, 0, 2);
         $firstPart = strlen($int) == 11 ? substr($int, 2, 5) : substr($int, 2, 4);
         $lastPart = strlen($int) == 11 ? substr($int, 7, 5) : substr($int, 6, 4);
         return "({$ddd}){$firstPart}-{$lastPart}";
     }

    
}
