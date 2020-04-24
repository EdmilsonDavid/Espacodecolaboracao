<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progectoestagiario extends Model
{
    //
    public function progecto()
    {
        return $this->belongsTo(Progecto::class);
    }
    public function estagiario()
    {
        return $this->belongsTo(Estagiario::class);
    }


}
