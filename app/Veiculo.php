<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = "veiculo";
    protected $primaryKey = "id";

    public function viagem()
    {
        return $this->hasMany(Viagem::class, "veiculo");
    }

    public function tipoVeiculo()
    {
        return $this->belongsTo(TipoVeiculo::class, "tipo_veiculo");
    }

    public function tipoCaminhao()
    {
        return $this->belongsTo(TipoCaminhao::class, "tipo_caminhao");
    }

    public function motorista()
    {
        return $this->belongsTo(Motorista::class, "proprietario");
    }   
}
