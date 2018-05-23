<?php

namespace App\Models\Anuncios;

use Illuminate\Database\Eloquent\Model;

class anuncio extends Model
{
    
    protected $fillable = ['nome', 
                           'endereco',
                           'numero',
                           'complemento',
                           'bairro',
                           'cidade',
                           'CEP',
                           'regional',
                           'ponto_refencia',
                           'portaoautomatico',
                           'possuivigialncia',
                           'funcionamento_inicio',
                           'funcionamento_fim',
                           'observacao',
                           'altura',
                           'comprimento',
                           'largura'];

    protected $dates = ['datacadastro'];

    function anuncio() {
        return $this->belongsTo('App\Models\Anuncios\anuncio');
    }

}
