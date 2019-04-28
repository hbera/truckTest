<?php

use Illuminate\Database\Seeder;
use App\Situacao;
use Carbon\Carbon;

class SituacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table("situacao")->truncate();
        foreach(["Pendente", "Finalizada", "Andamento", "Cancelada", "Aguardando Motorista"] as $status)
        {
            Situacao::create([
                'descricao' => $status,
                'updated_at' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }       
    }
}
