<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $table = "viagem";
    protected $primaryKey = "id";

    public function frete ()
    {
        return $this->belongsTo(Frete::class, "frete");
    }

    public function situacao ()
    {
        return $this->belongsTo(Situacao::class, "situacao");
    }

    public function motorista()
    {
        return $this->belongsTo(Motorista::class, "motorista");
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, "veiculo");
    }
}
