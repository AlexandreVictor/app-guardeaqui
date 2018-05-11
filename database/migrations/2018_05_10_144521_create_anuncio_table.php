<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuncioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',200);
            $table->integer('fk_idusuario')->unsigned();
            $table->foreign('fk_idusuario')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');
            $table->integer('status')->default(0);
            $table->string('endereco',200);
            $table->string('numero',10);
            $table->string('complemento',200)->nullable();
            $table->string('bairro',200);
            $table->string('cidade',200);
            $table->double('CEP',8,0);
            $table->string('regional',100);
            $table->string('ponto_refencia',200)->nullable();
            $table->integer('aprovado')->default(0);
            $table->integer('pago')->default(0);
            $table->integer('portaoautomatico')->default(0);
            $table->integer('possuivigialncia')->default(0);
            $table->string('funcionamento_inicio')->nullable();
            $table->string('funcionamento_fim')->nullable();
            $table->text('observacao')->nullable();
            $table->double('altura',15,8);
            $table->double('comprimento',15,8);
            $table->double('largura',15,8);
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
        Schema::dropIfExists('anuncios');
    }
}
