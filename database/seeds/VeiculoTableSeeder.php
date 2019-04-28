<?php

use Illuminate\Database\Seeder;
use App\Veiculo;
use App\TipoVeiculo;
use App\TipoCaminhao;
use App\Motorista;
use Faker\Factory as Faker;
use Carbon\Carbon;

class VeiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("veiculo")->truncate();
        $faker = Faker::create("pt_BR");
        $tipoCaminhao = DB::table("tipo_caminhao")->pluck("id")->all();
        $motorista = DB::table("motorista")->pluck("id")->all();
        $tipoVeiculo = DB::table("tipo_veiculo")->pluck("id")->all();

        foreach(range(1, 15) as $i){
            Veiculo::create([
                'fabricante' => $faker->company(),
                'modelo' => $faker->firstNameMale,
                'placa' => str_random(10),
                'tipo_caminhao' => $faker->randomElement($tipoCaminhao),
                'tipo_veiculo' => $faker->randomElement($tipoVeiculo),
                'proprietario' => $faker->randomElement($motorista),
                'updated_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
