<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVeiculo extends Model
{
    protected $table = "tipo_veiculo";
    protected $primaryKey = "id";

    public function caminhao()
    {
        return $this->hasMany(Caminhao::class, "tipo_veiculo");
    }

    public function scopeProprio($query)
    {
        return $query->where("id", 2);
    }

    public function scopeAlugado($query)
    {
        return $query->where("id", 1);
    }

    public function scopeEmprestado($query)
    {
        return $query->where("id", 3);
    }
}
