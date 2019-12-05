<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lodgment;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('admin.registro.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lodgments = Lodgment::all();
        return view('admin.registro.create',compact('lodgments'));
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
            'email' => 'required',
            'pass' => 'required',
            'lodg' => 'required'
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->pass);
        $users->lodgment_id = $request->lodg;
        $users->save();

        $users->roles()->attach(Role::where('name', 'admin')->first());
        return redirect()->route('registro.index')->with('successMsg','Usuario Agregado');
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
        $users = User::find($id);
        $lodgments = Lodgment::all();
        $data = compact('users','lodgments');

        return view('admin.registro.edit',$data);
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
            'email' => 'required',
            'pass' => 'required',
            'lodg' => 'required'
        ]);

        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
         $users->password = Hash::make($request->pass);
        $users->lodgment_id = $request->lodg;
        $users->save();
        return redirect()->route('registro.index')->with('successMsg','Usuario Agregado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->back()->with('successMsg','Usuario eliminado');
    }
}
