<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TypeRoom;

class TypeRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeRooms = TypeRoom::all();

        return view('admin.typeRoom.index',compact('typeRooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeRoom.create');
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
            'type' => 'required',
        ]);

        $typeRoom = new TypeRoom();
        $typeRoom ->type_room = $request->type;
        $typeRoom->save();

        return redirect()->route('typeRoom.index')->with('successMsg','Tipo de habitacion agregada');
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
        $typeRoom = TypeRoom::find($id);

        return view('admin.typeRoom.edit',compact('typeRoom'));
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
            'type' => 'required',
        ]);

        $typeRoom = TypeRoom::find($id);
        $typeRoom ->type_room = $request->type;
        $typeRoom->save();

        return redirect()->route('typeRoom.index')->with('successMsg','Tipo de habitacion agregada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        typeRoom::find($id)->delete();

        return redirect()->back()->with('successMsg','Tipo de habitacion eliminada');
    }
}
