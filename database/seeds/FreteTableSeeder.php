<?php

use Illuminate\Database\Seeder;
use App\Frete;
use Faker\Factory as Faker;
use Carbon\Carbon;

class FreteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("frete")->truncate();

        $faker = Faker::create("pt_BR");

        foreach( range(1, 20) as $i){
            Frete::create([
                'origem' => $faker->address,
                'destino' => $faker->address,
                'lat_origem' => $faker->latitude(-16,5),
                'long_origem' => $faker->longitude(34,73),
                'lat_destino' => $faker->latitude(-16,5),
                'long_destino' => $faker->longitude(34,73),
                'updated_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
