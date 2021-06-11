<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partikulat;
use App\nodeB;
use App\payload;
use DB;
use App\Helpers\Ispu;
use Carbon\Carbon;

class componentController extends Controller
{
    public function index(){
        
        //make new object
        $obj = new ISPU();

        /* QUERY PM10 DIAGRAM LINE & DIAGRAM BATANG */
        // -- Diagram line PM10 --//
        
        // DUMMY
        $PM10 = 0;
        // $dataPM = DB::table('node_b')
        //             ->select(DB::raw('AVG(payload) as payloadtotal'))
        //             ->first();
 
        // $PM10 = $obj->countPM(round($dataPM->payloadtotal));
        // $dataPM = DB::table('node_b')->where(DB::raw('DATE_ADD(TIME(created_at), INTERVAL 24 HOUR)'), '<', Carbon::now('GMT+7'))->get(); 
        // $dataPM = DB::table('node_b')
        //             ->where('created_at', '>', DB::raw('DATE_SUB(NOW(), INTERVAL 24 HOUR)'))
        //             ->where('created_at', '<=', Carbon::now('GMT+7'))
        //             ->get();
        // // // -- END Diagram line PM10 -- //

        // // -- Diagram batang PM10 -- //
        // $payload = '';
        // $countdata = 0;

        // foreach($dataPM as $pm):
        //     $payload .= $obj->countPM($pm->payload);  
        //     if($countdata != count($dataPM) - 1):
        //         $payload .= ','; 
        //     endif;
        //     $countdata = $countdata+ 1; 
        // endforeach;

        // //avg data pm10
        // $PM10 = round($obj->avg($payload)); 
    

        // -- END Diagram batang PM 10 -- //
        /* END QUERY PM10 DIAGRAM LINE & DIAGRAM BATANG */

        // MASIH DUMMY 
        // Hitung data diagram batang partikel NO2
        // $dataNO2  = DB::table('partikel')
        //             ->select(DB::raw('AVG(payload) as payloadtotal'))
        //             ->first();

        // $NO2 = $obj->countNO(round($dataNO2->payloadtotal));
        $NO2 = 0;
    
        // hitung data diagram batang partikel O3
        // $dataO3 = 234;
        // $O3 = $obj->countO($dataO3);
        $O3 = 0;


        //Hitung data diagram batang partikel SO2
        // $dataSO2 = 100;
        // $SO2 = $obj->countSO($dataSO2);
        $SO2 = 0;


        $now = Carbon::now('GMT+7')->format('Y-m-d');
            

        // Hitung data diagram batang partikel CO 
        $a = DB::table('sensor_data')
                ->select(DB::raw('AVG(payload_raw) as payload'))
                // ->where('time_convert', 'like', '%'.$now.'%')
                ->where(DB::raw("date_format(time_convert, '%Y-%m-%d')"), '=', $now)
                ->groupBy(DB::raw('DATE(time_convert)'))
                ->first();
        
        
            if(isset($a->payload)):
            $CO2 = (int)$a->payload;
            else: 
                $CO2 = 0;
            endif;

        // $yesterday = date('Y-m-d', strtotime("-1 day", strtotime(date("Y-m-d"))));
        
        //Get data co for line chart
        $CoPayload = DB::table('sensor_data')
                        ->select(
                            //'time',
                            DB::raw('hour(time_convert) as hour'),
                            DB::raw('count(time) as countdata')
                        )
                        //->whereBetween('time_convert', [$now.' 00:00:00', $now.' 23:59:59'])
                        ->where(DB::raw("date_format(time_convert, '%Y-%m-%d')"), '=', $now)
                        ->groupBy(DB::raw('hour(time_convert)'))
                        ->get();
        
        // array nyimpan jam time_convert
        $dco= array();

        // array nyimpan jumlah data
        $countdata = array();

        // array hanya jam 
        $time24 = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23');
        
        // eksekusi nyimpn data jumlah data dan jam time_convert
        foreach($CoPayload as $cp):
            // eksekusi nyimpan jam time_convert
            $dco[] = $cp->hour;
            // eksekusi nyimpan jumlah data
            $countdata[] = $cp->countdata;
        endforeach;

        // array untuk implementasi data grafik
        $graphicdata = array();
        foreach($time24 as $t24):
            // mengecheck jika true value dari time 24 dan time_convert database
            if(in_array($t24, $dco)):
                // mengechek index array atau key untuk dipakai di countdata
                $index = array_search($t24, $dco);
                // untuk count data yang ada isinya
                $graphicdata[] = $countdata[$index];
            // jika false value dari time 24 dan time_convert database
            else:
                // untuk count data yang kosong
                $graphicdata[] = 0;
            endif;
        endforeach;
    //    dd($yesterday);
        // dd($dco);
        // convert dari array menjadi string result 3,4,5,6
        $graphicdata = implode(",", $graphicdata);
    
        return view('pages.dashboard', compact('NO2', 'O3', 'PM10', 'SO2', 'CO2', 'graphicdata'));
    }
}
