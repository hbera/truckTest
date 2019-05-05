<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motorista;


class MotoristaController extends Controller
{
    public function atualizarRegistro(Request $request, $id)
    {
        
    }

    public function comVeiculoProprio()
    {
       
        $motoristasComVeiculoProp = Motorista::with("veiculo")->whereHas("veiculo.tipoVeiculo", function ($q) {
             $q->proprio();
        })->get();

        if( !$motoristasComVeiculoProp ){
            return response()->json("Sem registro encontrados", 404);
        }

        return response()->json(['data' => $motoristasComVeiculoProp, 200]);
    }

    public function criarNovo()
    {

    }



}
