<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCaminhao extends Model
{
    protected $table = "tipo_caminhao";
    protected $primaryKey = "id";

    public function caminhao()
    {
        return $this->hasMany(Caminhao::class, "tipo_caminhao");
    }
}
