<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partikulat;
use App\nodeB;
use DB;
use App\Helpers\ISPU;

class componentController extends Controller
{
    public function index(){
        
        //make new object
        $obj = new ISPU();

        // Hitung data partikel NO2
        $dataNO2  = DB::table('partikel')
                ->select(DB::raw('SUM(payload) as payloadtotal'))
                ->first();

        $NO2 = $obj->countNO($dataNO2->payloadtotal);
    
        // hitung data partikel O3
        $dataO3 = 234;
        $O3 = $obj->countO($dataO3);

        $dataPM10 = 50;
        $PM10 = $obj->countPM($dataPM10);

        $dataSO2 = 100;
        $SO2 = $obj->countSO($dataSO2);

        $dataCO2 = 20;
        $CO2 = $obj->countCO($dataCO2);


        //data grafik per jam 
        $dataPM = DB::table('node_b')->get();
        dd($dataPM);

        return view('pages.dashboard', compact('NO2', 'O3', 'PM10', 'SO2', 'CO2'));
    }
}
