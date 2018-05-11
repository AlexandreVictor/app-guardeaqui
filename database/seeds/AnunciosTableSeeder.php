<?php

use Illuminate\Database\Seeder;

class AnunciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $this->createAnuncio();
    }

    private function createAnuncio()

    {
        $max = 30;//rand(10, 30);
        for($i=0; $i < $max; $i++):
            $this->createAnuncios($i);
        endfor;
        $this->command->info($max . ' demo anuncio criado com sucesso');
    }
    private function createAnuncios($index)
    {

        $_endereco = array("Rua Ester", 
                           "Av. do Rosario",
                           "Desembargador Alfredo"
                        );
        $_bairro = array("Casa Branca", 
                         "Savassi", 
                         "Suzana"
                        );
        $_regional = array("Sul", 
                           "Centro-Sul", 
                           "Nordeste");


        App\Models\Anuncios\anuncio::create([

            'nome'=> 'Espaço bem localizado'.$index
           ,'fk_idusuario' => rand(1,99)
           ,'endereco' => $_endereco[rand(0,2)]
           ,'numero' => rand(1,999)
           ,'bairro' =>$_bairro[rand(0,2)]
           ,'cidade' =>'Belo Horizonte'
           ,'CEP' => rand(30,33).rand(100,999).rand(100,999)
           ,'regional' => $_regional[rand(0,2)]
           ,'altura' => rand(1,5)
           ,'comprimento' => rand(5,16)
           ,'largura' => rand(3,11)
           
           
       ]);
       
    }
}
