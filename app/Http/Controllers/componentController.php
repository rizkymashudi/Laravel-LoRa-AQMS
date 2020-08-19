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

        // Hitung data diagram batang partikel NO2
        $dataNO2  = DB::table('partikel')
                ->select(DB::raw('AVG(payload) as payloadtotal'))
                ->first();
        // dd(round($dataNO2->payloadtotal));

        $NO2 = $obj->countNO(round($dataNO2->payloadtotal));
    
        // hitung data diagram batang partikel O3
        $dataO3 = 234;
        $O3 = $obj->countO($dataO3);

        // Hitung data diagram batang partikel PM10
        $dataPM10 = DB::table('node_b')
                    ->select(DB::raw('AVG(payload) as payloadttl'))
                    ->first();
        // dd(round($dataPM10->payloadttl));
        $PM10 = $obj->countPM(round($dataPM10->payloadttl));

        //Hitung data diagram batang partikel SO2
        $dataSO2 = 100;
        $SO2 = $obj->countSO($dataSO2);

        // Hitung data diagram batang partikel CO2 
        $dataCO2 = 20;
        $CO2 = $obj->countCO($dataCO2);

        //data grafik PM10 per jam 
        $dataPM = DB::table('node_b')->get();
        // dd($dataPM);

        return view('pages.dashboard', compact('NO2', 'O3', 'PM10', 'SO2', 'CO2', 'dataPM'));
    }
}
