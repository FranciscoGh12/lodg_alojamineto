<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    public function promotions()
    {
        return $this->belongsTo(Promo::class);
    }

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }


}
