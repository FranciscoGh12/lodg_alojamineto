<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lodgment extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

}
