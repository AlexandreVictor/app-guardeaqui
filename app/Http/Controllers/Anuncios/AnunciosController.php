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
                ->where('pago','=','1')
                ->where('aprovado','=','1')
                ->where('status','=','1')
                ->select('nome', 'endereco')->get();

                         return $Dados;
    }
    public function anunciosporendereco($id){
            //retornar os dados conforme id
       
            $Dados = DB::table('anuncios')
             ->where('endereco','=',$id)
             ->select('nome', 'endereco')->get();
        return $Dados;
    }
    
}