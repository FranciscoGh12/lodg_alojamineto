<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name_client', 'email_cliente', 'movil_client', 'ticket_client'
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
