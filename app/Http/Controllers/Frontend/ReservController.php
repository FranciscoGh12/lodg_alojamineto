<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
class ReservController extends Controller
{
    public function show($id)
    {
        $room = Room::find($id);
        return view('layouts.reservation',compact('room'));
    }

    public function reserv()
    {

    }
}
