<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->string('data_nascimento');
            $table->string('cores');
            $table->string('sexo');
            $table->timestamps();

            $table->unsignedBigInteger('adotante_id')->nullable();
            $table->foreign('adotante_id')->references('id')->on('adotantes');

            $table->unsignedBigInteger('especie_id')->nullable();
            $table->unsignedBigInteger('raca_id')->nullable();
            $table->unsignedBigInteger('porte_id')->nullable();
            $table->unsignedBigInteger('sociabilidade_id')->nullable();
            $table->unsignedBigInteger('carinhoso_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
