<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['id','type_room'];

    public function lodgments()
    {
        return $this->belongsTo(Lodgment::class);
    }
    public function typeRooms()
    {
        return $this->belongsTo(TypeRoom::class);
    }

    public function promotions()
    {
        return $this->hasOne(Promo::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


}
