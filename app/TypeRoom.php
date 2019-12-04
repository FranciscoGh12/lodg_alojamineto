<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
