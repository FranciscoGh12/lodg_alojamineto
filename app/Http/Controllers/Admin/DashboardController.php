<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lodgment;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $hoteles_count = Lodgment::where('type_lodg','Hotel')->count();
        $posadas_count = Lodgment::where('type_lodg','Posada')->count();

        return view('admin.dashboard',compact('hoteles_count'))->with('posadas_count',$posadas_count);
    }
}
