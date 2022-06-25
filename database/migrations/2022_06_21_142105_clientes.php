<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('clientes', function(Blueprint $table) {
            $table->engine="innoDB";
            $table->bigIncrements('id');
            $table->string('nome');
            $table->bigInteger('representante_id')->unsigned();
            $table->string('email');
            $table->string('cep');
            $table->string('endereco');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('complemento');
            $table->timestamps();

            $table->foreign('representante_id')->references('id')->on('representantes')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
