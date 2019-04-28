<?php

use Illuminate\Database\Seeder;
use App\TipoCaminhao;
use Carbon\Carbon;

class TipoCaminhaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("tipo_caminhao")->truncate();
        foreach(["3/4", "Toco", "Truck", "Carreta Simples", "Eixo Simples"] as $tipo)
        {
            TipoCaminhao::create([
                'descricao' => $tipo,
                'updated_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
