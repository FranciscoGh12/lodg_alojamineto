<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRom extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
}
