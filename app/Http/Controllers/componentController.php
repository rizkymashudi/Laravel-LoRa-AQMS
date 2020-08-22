<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partikulat;
use App\nodeB;
use DB;
use App\Helpers\ISPU;
use Carbon\Carbon;

class componentController extends Controller
{
    public function index(){
        
        //make new object
        $obj = new ISPU();

        /* QUERY PM10 DIAGRAM LINE & DIAGRAM BATANG */
        // -- Diagram line PM10 --//
        // $dataPM = DB::table('node_b')->where(DB::raw('DATE_ADD(TIME(created_at), INTERVAL 24 HOUR)'), '<', Carbon::now('GMT+7'))->get(); 
        $dataPM = DB::table('node_b')
                    ->where('created_at', '>', DB::raw('DATE_SUB(NOW(), INTERVAL 24 HOUR)'))
                    ->where('created_at', '<=', Carbon::now('GMT+7'))
                    ->get();
        // -- END Diagram line PM10 -- //

        // -- Diagram batang PM10 -- //
        $payload = '';
        $countdata = 0;

        foreach($dataPM as $pm):
            $payload .= $obj->countPM($pm->payload);  
            if($countdata != count($dataPM) - 1):
                $payload .= ','; 
            endif;
            $countdata = $countdata+ 1; 
        endforeach;

        //avg data pm10
        $PM10 = round($obj->avg($payload)); 

        // -- END Diagram batang PM 10 -- //
        /* END QUERY PM10 DIAGRAM LINE & DIAGRAM BATANG */

        // MASIH DUMMY 
        // Hitung data diagram batang partikel NO2
        $dataNO2  = DB::table('partikel')
                    ->select(DB::raw('AVG(payload) as payloadtotal'))
                    ->first();
        // dd(round($dataNO2->payloadtotal));
        $NO2 = $obj->countNO(round($dataNO2->payloadtotal));
    
        // hitung data diagram batang partikel O3
        $dataO3 = 234;
        $O3 = $obj->countO($dataO3);


        //Hitung data diagram batang partikel SO2
        $dataSO2 = 100;
        $SO2 = $obj->countSO($dataSO2);

        // Hitung data diagram batang partikel CO2 
        $dataCO2 = 20;
        $CO2 = $obj->countCO($dataCO2);


        return view('pages.dashboard', compact('NO2', 'O3', 'PM10', 'SO2', 'CO2', 'dataPM', 'obj'));
    }
}
