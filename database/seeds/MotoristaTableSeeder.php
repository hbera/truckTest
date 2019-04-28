<?php

use Illuminate\Database\Seeder;
use App\Motorista;
use Faker\Factory as Faker;
use Carbon\Carbon;

class MotoristaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("motorista")->truncate();
        $faker = Faker::create("pt_BR");
        foreach( range(1, 30) as $i){
            Motorista::create([
                'nome' => $faker->name,
                'data_nasc' => $faker->date("Y-m-d"),
                'sexo' => $faker->randomElement(["M","F"]),
                'cnh' => $faker->randomNumber(7),
                'categorias_cnh' => implode(",", $faker->randomElements(["A","B","C","D","E"], 2)),
                'updated_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
