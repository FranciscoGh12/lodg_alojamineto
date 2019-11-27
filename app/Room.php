<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function lodgment()
    {
        return $this->belongsTo(Lodgment::class);
    }

    public function typeroms()
    {
        return $this->hasMany(TypeRom::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
