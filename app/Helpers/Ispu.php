<?php
namespace App\Helpers;

class ISPU{


    // public function countISPU($xX){

    //     /* ISPU BATAS ATAS DAN BATAS BAWAH */
    //     //data refer pada table batas ISPU satuan SI
    //     $ispuA = range(50, 100);
    //     $ispuB = range(100, 200);
    //     $ispuC = range(200, 300);
    //     $ispuD = range(300, 400);
    //     $ispuE = range(400, 500);

    //     /* penentuan ISPU batas atas dan ISPU batas bawah */
    //     if(in_array($xX, $ispuA)):
    //         $Ia = 100;
    //         $Ib = 50;
    //     elseif(in_array($xX, $ispuB)):
    //         $Ia = 200;
    //         $Ib = 100;
    //     elseif(in_array($xX, $ispuC)):
    //         $Ia = 300;
    //         $Ib = 200;
    //     elseif(in_array($xX, $ispuD)):
    //         $Ia = 400;
    //         $Ib = 300;
    //     elseif(in_array($xX, $ispuE)):
    //         $Ia = 500;
    //         $Ib = 400;
    //     else:
    //         echo 'not found';
    //     endif;


    //     /* HITUNG SATUAN SI */
    //     $I = $Ia-$Ib / $Xa-$Xb ($Xx-$Xb) + $Ib;

    //     return $I;


    // }

    //Function rata-rata
    public function avg($val){

        // $arrData = array($val);
        $arrData = explode(',', $val);
        $average = array_sum($arrData) / count($arrData);
        // dd($average);
        return $average;
    }
    
    //PM10
    public function countPM($xX){
        
        /* Ambien BATAS ATAS DAN ambien BATAS BAWAH */
        $pmA = range(50, 150);
        $pmB = range(150, 350);
        $pmC = range(350, 420);
        $pmD = range(420, 500);
        $pmE = range(500, 600);

        /* penentuan ambien, ISPU batas atas dan ambien, ISPU batas bawah*/
        if(in_array($xX, $pmA)):
            $Xa = 150;
            $Xb = 50;
            $Ia = 100;
            $Ib = 50;
        elseif(in_array($xX, $pmB)):
            $Xa = 350;
            $Xb = 150;
            $Ia = 200;
            $Ib = 100;
        elseif(in_array($xX, $pmC)):
            $Xa = 420;
            $Xb = 350;
            $Ia = 300;
            $Ib = 200;
        elseif(in_array($xX, $pmD)):
            $Xa = 500;
            $Xb = 420;
            $Ia = 400;
            $Ib = 300;
        elseif(in_array($xX, $pmE)):
            $Xa = 600;
            $Xb = 500;
            $Ia = 500;
            $Ib = 400;
        else:
            echo 'not found';
        endif;

        // Mari berhitung
        $I = (($Ia-$Ib) / ($Xa-$Xb)) * ($xX - $Xb) + $Ib;

        // dd($Ia);
        return round($I);
    }

    //SO2
    public function countSO($xX){
        
        /* Ambien BATAS ATAS DAN ambien BATAS BAWAH */
        $soA = range(80, 365);
        $soB = range(365, 800);
        $soC = range(800, 1600);
        $soD = range(1600, 2100);
        $soE = range(2100, 2620);

        /*penentuan ambien, ISPU batas atas dan ambien, ISPU batas bawah*/
        if(in_array($xX, $soA)):
            $Xa = 365;
            $Xb = 80;
            $Ia = 100;
            $Ib = 50;
        elseif(in_array($xX, $soB)):
            $Xa = 800;
            $Xb = 365;
            $Ia = 200;
            $Ib = 100;
        elseif(in_array($xX, $soC)):
            $Xa = 1600;
            $Xb = 800;
            $Ia = 300;
            $Ib = 200;
        elseif(in_array($xX, $soD)):
            $Xa = 2100;
            $Xb = 1600;
            $Ia = 400;
            $Ib = 300;
        elseif(in_array($xX, $soE)):
            $Xa = 2620;
            $Xb = 2100;
            $Ia = 500;
            $Ib = 400;
        else:
            echo 'not found';
        endif;

        // Mari berhitung
        $I = (($Ia-$Ib)/($Xa-$Xb)) * ($xX-$Xb) + $Ib;

        return round($I);
    }

    //CO2
    public function countCO($xX){
        
        /* Ambien BATAS ATAS DAN ambien BATAS BAWAH */
        $coA = range(5, 10);
        $coB = range(10, 17);
        $coC = range(17, 34);
        $coD = range(34, 46);
        $coE = range(46, 57.5);

        /* penentuan ambien, ISPU batas atas dan ambien, ISPU batas bawah*/
        if(in_array($xX, $coA)):
            $Xa = 10;   //Ambien batas atas
            $Xb = 5;    //Ambien batas bawah
            $Ia = 100;  //ISPU batas atas
            $Ib = 50;   //ISPU batas bawah
        elseif(in_array($xX, $coB)):
            $Xa = 17;
            $Xb = 10;
            $Ia = 200;
            $Ib = 100;
        elseif(in_array($xX, $coC)):
            $Xa = 34;
            $Xb = 17;
            $Ia = 300;
            $Ib = 200;
        elseif(in_array($xX, $coD)):
            $Xa = 46;
            $Xb = 34;
            $Ia = 400;
            $Ib = 300;
        elseif(in_array($xX, $coE)):
            $Xa = 57.6;
            $Xb = 46;
            $Ia = 500;
            $Ib = 400;
        else:
            echo 'not found';
        endif;

        
        // Mari berhitung
        $I = (($Ia - $Ib) / ($Xa - $Xb)) * ($xX - $Xb) + $Ib;

        return round($I);
    }

    //O3
    public function countO($xX){
        
        /* Ambien BATAS ATAS DAN ambien BATAS BAWAH */
        $oA = range(120, 235);
        $oB = range(235, 400);
        $oC = range(400, 800);
        $oD = range(800, 1000);
        $oE = range(1000, 1200);

        /* penentuan ambien batas atas dan ambien batas bawah*/
        if(in_array($xX, $oA)):
            $Xa = 235;
            $Xb = 120;
            $Ia = 100;
            $Ib = 50;
        elseif(in_array($xX, $oB)):
            $Xa = 400;
            $Xb = 235;
            $Ia = 200;
            $Ib = 100;
        elseif(in_array($xX, $oC)):
            $Xa = 800;
            $Xb = 400;
            $Ia = 300;
            $Ib = 200;
        elseif(in_array($xX, $oD)):
            $Xa = 1000;
            $Xb = 800;
            $Ia = 400;
            $Ib = 300;
        elseif(in_array($xX, $oE)):
            $Xa = 1200;
            $Xb = 1000;
            $Ia = 500;
            $Ib = 400;
        else:
            echo 'not found';
        endif;

        // Mari berhitung
        $I = (($Ia-$Ib) / ($Xa-$Xb)) * ($xX - $Xb) + $Ib;

        return round($I);
    }

    //NO2
    public function countNO($xX){
        
        /* Ambien BATAS ATAS DAN ambien BATAS BAWAH */
        $noA = range(2, 2);
        $noB = range(2, 1130);
        $noC = range(1130, 2260);
        $noD = range(2260, 3000);
        $noE = range(3000, 3750);

        /* penentuan ambien batas atas dan ambien batas bawah*/
        if(in_array($xX, $noA)):
            $Xa = 2;
            $Xb = 2;
            $Ia = 100;
            $Ib = 50;
        elseif(in_array($xX, $noB)):
            $Xa = 1130;
            $Xb = 2;
            $Ia = 200;
            $Ib = 100;
        elseif(in_array($xX, $noC)):
            $Xa = 2260;
            $Xb = 1130;
            $Ia = 300;
            $Ib = 200;
        elseif(in_array($xX, $noD)):
            $Xa = 3000;
            $Xb = 2260;
            $Ia = 400;
            $Ib = 300;
        elseif(in_array($xX, $noE)):
            $Xa = 3750;
            $Xb = 3000;
            $Ia = 500;
            $Ib = 400;
        else:
            echo 'not found';
        endif;

        // Mari berhitung
        $I = (($Ia-$Ib)/($Xa-$Xb)) * ($xX - $Xb) + $Ib;

        return round($I);
    }
}
?>