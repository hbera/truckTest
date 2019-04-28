<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaViagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagem', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("frete");
            $table->unsignedBigInteger("veiculo");
            $table->unsignedBigInteger("motorista");
            $table->date("data_viagem");
            $table->integer("situacao")->unsigned();
            $table->boolean("carga");
            $table->unique(["frete", "veiculo", "motorista"]);
            $table->timestamps();
        });

        Schema::table(
            "viagem", function(Blueprint $table){
                
                $table
                    ->foreign("veiculo")
                    ->references("id")
                    ->on("veiculo")
                    ->onUpdate("cascade");
                $table
                    ->foreign("motorista")
                    ->references("id")
                    ->on("motorista")
                    ->onUpdate("cascade");
                $table
                    ->foreign("frete")
                    ->references("id")
                    ->on("frete")
                    ->onUpdate("cascade");

                $table
                    ->foreign("situacao")
                    ->references("id")
                    ->on("situacao")
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
        Schema::dropIfExists('viagem');
    }
}
