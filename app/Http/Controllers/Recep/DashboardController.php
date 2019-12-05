<?php

namespace App\Http\Controllers\Recep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('recepcion');
    }

    public function index()
    {
        return view('recep.dashboard');
    }
}
