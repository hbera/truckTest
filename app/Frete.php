<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    protected $table = "frete";
    protected $primaryKey = "id";

    public function viagem()
    {
        return $this->hasOne(Viagem::class, "frete", "id");
    }
}
