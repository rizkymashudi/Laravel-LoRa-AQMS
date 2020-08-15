<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partikulat;
use DB;


class componentController extends Controller
{
    public function index(){
        
        $dataNO2  = DB::table('partikel')
                ->select(DB::raw('SUM(payload) as payloadtotal'))
                ->first();
        
        $dataO3 = 250;
        return view('pages.dashboard', compact('dataNO2', 'dataO3'));
    }
}
