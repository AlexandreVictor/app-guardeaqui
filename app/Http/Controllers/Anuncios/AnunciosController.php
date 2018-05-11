<?php

namespace App\Http\Controllers\Anuncios;

use Illuminate\Http\Request;
use App\Models\Anuncios\anuncio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class AnunciosController extends Controller
{
        public function index(){
        
                $Dados = DB::table('anuncios')
                /*->where('id','=',$id)
                ->select('nome', 'foto','ddd',
                         'tel_celular','tel_comercial')*/->get();

                         return $Dados;
    }
    public function anunciosporendereco($id){
            //retornar os dados conforme id
            $Dados = DB::table('anuncios')
            ->where('endereco','=',$id)
            ->select('nome', 'endereco')->get();
        
        return $Dados;
        //return 'teste de endereço'.$id;
    }
}
