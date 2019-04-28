<?php

use Illuminate\Database\Seeder;
use App\Situacao;
use App\Viagem;
use App\Motorista;
use App\Frete;
use App\Veiculo;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ViagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("viagem")->truncate();
        $faker = Faker::create("pt_BR");

        $situacao = DB::table("situacao")->pluck("id")->all();
        $frete = DB::table("frete")->pluck("id")->all();
        $motorista = DB::table("motorista")->pluck('id')->all();
        $veiculo = DB::table("veiculo")->pluck("id")->all();

        foreach(range(1, 50) as $i){
            Viagem::create([
                'frete' => $faker->randomElement($frete),
                'veiculo' => $faker->randomElement($veiculo),
                'motorista' => $faker->randomElement($motorista),
                'data_viagem' => $faker->date("Y-m-d"),
                'situacao' => $faker->randomElement($situacao),
                'carga' => $faker->boolean(70),
                'updated_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
