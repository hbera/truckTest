<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    protected $table = "situacao";
    protected $primaryKey = "id";

    public function viagem()
    {
        return $this->hasMany(Viagem::class, "situacao");
    }
}
