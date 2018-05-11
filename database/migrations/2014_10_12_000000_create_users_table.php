<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',200);
            $table->string('cpf',11)->unique();
            $table->string('senha');
            $table->string('email')->unique();
            $table->text('lembrete')->nullable();
            $table->string('sexo',1)->nullable();
            $table->integer('liberado')->default(1);
            $table->text('foto')->nullable();
            $table->integer('status')->default(1);
            $table->string('ddd',2);
            $table->string('tel_celular',9);
            $table->string('tel_comercial',9);
            $table->rememberToken();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
