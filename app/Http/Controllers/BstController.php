<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bst;
use App\Imports\BstImport;
use Maatwebsite\Excel\Facades\Excel;

class BstController extends Controller
{
    public function page(Request $request) {
        return view('bst');
    }

    public function input(Request $request) {
        $path = $request->file('file_data')->getPathName();
        ini_set('max_execution_time', 300);
        config(['excel.import.startRow' => 1]);
        config(['excel.csv.delimiter' => '|']);
        $result = Excel::import(new BstImport, $path, null, \Maatwebsite\Excel\Excel::CSV);
        return response()->json($result);
    }
}
