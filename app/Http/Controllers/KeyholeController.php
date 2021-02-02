<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyholeController extends Controller
{
    //
    public function page(Request $request) {
        return view('kh.page');
    }
}
