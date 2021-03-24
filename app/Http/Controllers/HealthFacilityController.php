<?php

namespace App\Http\Controllers;

use App\HealthFacility;
use Illuminate\Http\Request;
use DB;

class HealthFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStates()
    {
        //
            $states = DB::table('states')->where('status', 'active')->get();

            return $states;

    }

    public function getLGAs(Request $request)
    {
        //
        $state = DB::table('states')->where('name', $request->state_name)->first();

        

        $lgas = DB::table("lgas")->where("state_id",$state->id)->get();

        

        return $lgas;

    }


    public function getWards(Request $request)
    {
        //
        $wards = DB::table('health_facilities')->where('LGA',$request->lga)->get('Ward')->unique('Ward');

        $spo_email = DB::table('health_facilities')->where('LGA',$request->lga)->first();

        $resuts = array(
            'wards' => $wards,
            'spo_email' => $spo_email,
        );

        return $resuts;

    }

    public function getCBOs(Request $request)
    {
        //
        $cbos = DB::table('health_facilities')->where('LGA',$request->lga)->get()->unique('CBO');

     

        return $cbos;

    }

    public function getCBOEmail(Request $request)
    {
        //
        $cbo_email = DB::table('health_facilities')->where('CBO', $request->cbo)->get();

     

        return $cbo_email;

    }

    

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function show(HealthFacility $healthFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthFacility $healthFacility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthFacility $healthFacility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthFacility  $healthFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthFacility $healthFacility)
    {
        //
    }
}
