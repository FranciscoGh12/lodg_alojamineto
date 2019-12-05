<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lodgment;
use App\Room;
use App\TypeRoom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->lodgment_id;
        $rooms = DB::select("SELECT * FROM rooms WHERE lodg_id ='".$user."'");
        return view('admin.habitacion.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeR = TypeRoom::all();
        return view('admin.habitacion.create',compact('typeR'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'numh' => 'required',
            'precio' => 'required',
        ]);
        $dato = Auth::user()->lodgment_id;
        $room = new Room();
        $room->num_room = $request->numh;
        $room->lodg_id = $dato;
        $room->status_room = $request->status;
        $room->description = $request->description;
        $room->prize_room = $request->precio;
        $room->type_room_id = $request->type;
        $room->save();
        return redirect()->route('habitacion.index')->with('successMsg','Habitacion Agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        $typeR = TypeRoom::all();
        return view('admin.habitacion.edit',compact('room'))->with('typeR',$typeR);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'numh' => 'required',
            'precio' => 'required',
        ]);
        $dato = Auth::user()->lodgment_id;
        $room = Room::find($id);
        $room->num_room = $request->numh;
        $room->lodg_id = $dato;
        $room->status_room = $request->status;
        $room->description = $request->description;
        $room->prize_room = $request->precio;
        $room->type_room_id = $request->type;
        $room->save();
        return redirect()->route('habitacion.index')->with('successMsg','Habitacion Agregada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::find($id)->delete();

        return redirect()->back()->with('successMsg','Habitacion eliminado');
    }
}
