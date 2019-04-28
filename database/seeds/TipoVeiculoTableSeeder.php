<?php

use Illuminate\Database\Seeder;
use App\TipoVeiculo;
use Carbon\Carbon;

class TipoVeiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("tipo_veiculo")->truncate();
        foreach(["Alugado", "Prórpio", "Empresatado"] as $status)
        {
            TipoVeiculo::create([
                "descricao" => $status,
                'updated_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
