<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $table = "motorista";
    protected $primaryKey = "id";

    public function veiculo ()
    {
        return $this->hasMany(Veiculo::class, "proprietario", "id");
    }

    public function viagem ()
    {
        return $this->hasMany(Viagem::class, "motorista", "id");
    }
    
}
