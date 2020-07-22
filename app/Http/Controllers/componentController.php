<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partikulat;
use DB;


class componentController extends Controller
{
    public function index(){
        
        $data  = DB::table('partikel')
                ->select(DB::raw('SUM(payload) as payloadtotal'))
                ->first();
        return view('pages.dashboard', compact('data'));
    }
}
