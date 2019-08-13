<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class CadastroSite extends Model
{
    protected $primaryKey = 'id_cad_sit';

    private $rule;

   // protected $table = 'cadastro_site';
    protected $fillable = [
       'user_id', 'Nome', 'Endereco', 'Detentora', 'tecnologia'
    ];
    public $rules = [
        'Nome' => 'required|min:3|max:100',
        'Endereco'=> 'required|min:3|max:100',
        'Detentora' => 'required|min:3|max:100',
        'tecnologia'=> 'required|min:3|max:100',
    ];
    
}
