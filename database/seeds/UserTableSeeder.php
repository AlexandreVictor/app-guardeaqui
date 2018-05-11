<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Apaga toda a tabela de usuários
        //DB::table('users')->truncate();
        // Cria usuários admins (dados controlados)
        $this->createAdmins();
        // Cria usuários demo (dados faker)
        $this->createUsers();      
    }
    private function createAdmins()
    {
        App\Models\Usuarios\usuario::create([

             'nome'=> 'Alexandre Victor Augusto'
            ,'cpf'=>'11512223646'
            ,'senha'=> bcrypt('Misterjlc1234')
           // ,'datacadastro'=>useCurrent();
            ,'email'=>'alexandrevct@hotmail.com'
            ,'ddd'=>'31'
            ,'tel_celular'=>'980120241'
            ,'tel_comercial'=>'36241595'
            
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('User Alexandre Victor Augusto created');
       
    }
    
    private function createUsers()

    {
        $max = 99;//rand(10, 30);
        for($i=0; $i < $max; $i++):
            $this->createUser($i);
        endfor;
        $this->command->info($max . ' criado com sucesso');
    }
    private function createUser($index)
    {   
        return App\Models\Usuarios\usuario::create([
            'nome'=> 'Usuario: '.$index
            ,'cpf'=> rand(100, 999).rand(100, 999).rand(100, 999).rand(0, 99)
            ,'senha'=> bcrypt('teste'.rand(0, 99))
            ,'email'=>'Usuario'.$index.'@hotmail.com'
            ,'ddd'=>'31'
            ,'tel_celular'=>'9'.rand(8000, 9999).rand(8000, 9999)
            ,'tel_comercial'=>rand(3000, 3999).rand(6000, 9999)
            
        ]);
    }
}