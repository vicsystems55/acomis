<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ChartDataController extends Controller
{
    //

    public function getHealthsAndCbo()          
    {
        # code...

        $all_healths = array();

        for ($i=4; $i < 12 ; $i++) { 
 
         $healths_per_month = DB::table('health_facilities')->whereMonth('updated_at', '=', $i)->get()->count();
 
         array_push($all_healths, $healths_per_month);

        

        }

        $all_cbos= array();

         for ($i=4; $i < 12 ; $i++) { 
 
            $cbos_per_month = DB::table('cbos')->whereMonth('updated_at', '=', $i)->get()->count();
    
            array_push($all_cbos, $cbos_per_month);
   
         } 


        $all_data =[
            'healths' => $all_healths,
            'cbos' => $all_cbos
        ];

        return $all_data;
    }
}
