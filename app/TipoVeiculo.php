<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVeiculo extends Model
{
    protected $table = "tipo_veiculo";
    protected $primaryKey = "id";

    protected function caminhao()
    {
        return $this->hasMany(Caminhao::class, "tipo_veiculo");
    }
}
