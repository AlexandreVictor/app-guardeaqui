<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use App\Models\Usuarios\usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function index()
    {
        $Usuario = usuario::with('anuncio')->get();
        //$Usuario = usuario::with('usuario')->get();
        return response()->json($Usuario);
        //return 'home page';
    }
    public function nm_teste($id)
    {
        //retornar todos os dados
        //$Dados = DB::table('usuarios')->where('id',1)->get();

        //retornar os dados conforme id
        $Dados = DB::table('usuarios')
                    ->where('id','=',$id)
                    ->select('nome', 'foto','ddd',
                             'tel_celular','tel_comercial')->get();
        return $Dados;
    }

    


}
