<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("fabricante", 60);
            $table->string("modelo", 25);
            $table->string("placa", 10);
            $table->integer("tipo_caminhao")->unsigned();
            $table->integer("tipo_veiculo")->unsigned();
            $table->bigInteger("proprietario")->unsigned();
            $table->timestamps();
        });

        Schema::table(
            'veiculo', function (Blueprint $table){
                $table
                    ->foreign("tipo_caminhao")
                    ->references("id")
                    ->on("tipo_caminhao")
                    ->onUpdate("cascade");
                $table
                    ->foreign("tipo_veiculo")
                    ->references("id")
                    ->on("tipo_veiculo")
                    ->onUpdate("cascade");
                $table
                    ->foreign("proprietario")
                    ->references("id")
                    ->on("motorista")
                    ->onUpdate("cascade");
            }
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo');
    }
}
