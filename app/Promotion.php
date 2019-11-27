<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function typeroom(Type $var = null)
    {
        return $this->belongsTo(TypeRom::class);
    }
}
