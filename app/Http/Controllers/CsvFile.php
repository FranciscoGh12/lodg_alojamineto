<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use Maatwebsite\Excel\Fascades\Excel;

use App\User;

class CsvFile extends Controller
{
    public function csv_export()
    {
        return Excel::download(new CvsExport,'sample-user.csv');
    }
}
