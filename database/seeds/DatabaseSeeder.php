<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call("SituacaoTableSeeder");
        $this->call("TipoVeiculoTableSeeder");
        $this->call("TipoCaminhaoTableSeeder");
        $this->call("FreteTableSeeder");
        $this->call("MotoristaTableSeeder");
        $this->call("VeiculoTableSeeder");
        $this->call("ViagemTableSeeder");
    }
}
