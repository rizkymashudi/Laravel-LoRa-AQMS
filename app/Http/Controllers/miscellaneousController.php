<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentangISPU;
use DB;

class miscellaneousController extends Controller
{
    public function index(){

        $rentangISPU = DB::table('_ispu_info_')->get();

        return view('pages.miscellaneous', compact('rentangISPU'));
    }
}
