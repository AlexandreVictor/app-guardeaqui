<?php

namespace App\Models\Usuarios;

use Illuminate\Database\Eloquent\Model;

class Cadastro_Usuarios extends Model
{
    
    protected $fillable = ['nome'];

    protected $dates = ['datacadastro'];

    function anuncio() {
        return $this->belongsTo('App\Models\Usuarios\Cadastro_Usuarios');
    }

}
