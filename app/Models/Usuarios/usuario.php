<?php

namespace App\Models\Usuarios;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable = ['nome',
                           'foto',
                           'ddd',
                           'tel_celular',
                           'tel_comercial'];

     protected $hidden = ['senha'];

    protected $dates = ['datacadastro'];

    function anuncio() {
        return $this->belongsTo('App\Models\Anuncios\anuncio');
    }


}