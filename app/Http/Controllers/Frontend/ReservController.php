<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use App\Reservation;
use Carbon\Carbon;
use App\Client;
use Brian2694\Toastr\Facades\Toastr;
use Brian2694\Toastr\Toastr as ToastrToastr;

class ReservController extends Controller
{
    public function show($id)
    {
        $room = Room::find($id);
        return view('layouts.reservation',compact('room'));
    }

    public function reserv(Request $request, $id)
    {
        $request->validate([
            'cnombre' => 'required',
            'cemail' => 'required',
            'cmovil' => 'required',
            'cin' => 'required',
            'cout' => 'required',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->cnombre);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/tickets'))
            {
                mkdir('uploads/tickets',0777,true);
            }
            $image->move('uploads/tickets',$imagename);
        }else{
            $imagename = "default.png";
        }


        $clients = Client::all()->count();
        $room = Room::find($id);

        $reservation = new Reservation();
        $reservation->start_reservation = $request->cin;
        $reservation->end_reservation = $request->cout;
        $reservation->pay_reservation = $room->prize_room;
        $reservation->room_id = $room->id;
        $reservation->clients()->create([
            'name_client' => $request->cnombre,
            'email_cliente' => $request->cemail,
            'movil_client' => $request->cmovil,
            'ticket_client' => $imagename,
        ]);
        $reservation->client_id = $clients+1;

        $reservation->save();

        Toastr::success('Reservation request sent successfully. we will confirm to you shortly','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();


    }
}
