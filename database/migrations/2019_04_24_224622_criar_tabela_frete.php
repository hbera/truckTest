<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFrete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("origem", 200);
            $table->string("destino", 200);
            $table->decimal("lat_origem", 10, 7);
            $table->decimal("long_origem", 10, 7);
            $table->decimal("lat_destino", 10, 7);
            $table->decimal("long_destino", 10, 7);
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
        Schema::dropIfExists('frete');
    }
}
