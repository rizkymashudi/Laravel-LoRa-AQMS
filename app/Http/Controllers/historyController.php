<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class historyController extends Controller
{
    public function index(){

        // $history = DB::table('node_b')
        //             ->where('created_at', '>', DB::raw('DATE_SUB(NOW(), INTERVAL 24 HOUR)'))
        //             ->where('created_at', '<=', Carbon::now('GMT+7'))
        //             ->get();

        // dd($history);

        return view('pages.history');
    }
}
