<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChavesEstrangeiras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->foreign('especie_id')->references('id')->on('especies');
            $table->foreign('raca_id')->references('id')->on('racas');
            $table->foreign('porte_id')->references('id')->on('portes');
            $table->foreign('sociabilidade_id')->references('id')->on('sociabilidades');
            $table->foreign('carinhoso_id')->references('id')->on('carinhosos');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('endereco_id')->references('id')->on('enderecos');
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
}
