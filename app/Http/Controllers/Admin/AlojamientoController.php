<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lodgment;
use Carbon\Carbon;
class AlojamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lodgments = Lodgment::all();
        return view('admin.alojamiento.index',compact('lodgments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alojamiento.create');
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
            'name' => 'required',
            'type'=> 'required | max:32',
            'direction' => 'required',
            'image' => 'image|max:3048|mimes:jpeg,jpg,bmp,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/lodgments'))
            {
                mkdir('uploads/lodgments',0777,true);
            }
            $image->move('uploads/lodgments',$imagename);
        }else{
            $imagename = "default.png";
        }

        $lodgment = new Lodgment();
        $lodgment->name_lodg = $request->name;
        $lodgment->type_lodg = $request->type;
        $lodgment->direction_lodg = $request->direction;
        $lodgment->description_lodg = $request->description;
        $lodgment->picture_lodg = $imagename;
        $lodgment->save();

        return redirect()->route('alojamiento.index')->with('successMsg','Alojamiento Agregado');
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
        $lodgment = Lodgment::find($id);

        return view('admin.alojamiento.edit',compact('lodgment'));
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
            'name' => 'required',
            'type'=> 'required | max:32',
            'direction' => 'required',
            'image' => 'image|max:3048|mimes:jpeg,jpg,bmp,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/lodgments'))
            {
                mkdir('uploads/lodgments',0777,true);
            }
            $image->move('uploads/lodgments',$imagename);
        }else{
            $imagename = "default.png";
        }

        $lodgment = Lodgment::find($id);
        $lodgment->name_lodg = $request->name;
        $lodgment->type_lodg = $request->type;
        $lodgment->direction_lodg = $request->direction;
        $lodgment->description_lodg = $request->description;
        $lodgment->picture_lodg = $imagename;
        $lodgment->save();

        return redirect()->route('alojamiento.index')->with('successMsg','Alojamiento Agregado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lodgment::find($id)->delete();

        return redirect()->back()->with('successMsg','Alojamiento eliminado');
    }
}
