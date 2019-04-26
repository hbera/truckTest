<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMotorista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorista', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome", 100);
            $table->date("data_nasc");
            $table->char("sexo", 1);
            $table->string("cnh", 11);
            $table->string("categorias_cnh", 10);
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
        Schema::dropIfExists('motorista');
    }
}
