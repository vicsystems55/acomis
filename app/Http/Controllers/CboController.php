<?php

namespace App\Http\Controllers;

use App\Cbo;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllCBOs()
    {
        //
        $cbos = Cbo::all();

        return $cbos;
    }

    public function getSingleCBO(Request $request)
    {
        # code...

        try {
            //code...
            $cob_details = Cbo::with('reports')->latest()->where('email', $request->cbo_email)->first();

            return $cob_details;
        } catch (\Throwable $th) {
            //throw $th;
      
            return $th;

        }
    


    }

    public function getSingleCBO2(Request $request)
    {
        # code...

        try {
            //code...
            $cob_details = Cbo::with('reports')->latest()->where('email', $request->cbo_email)->first();

            $wards = DB::table('health_facilities')->where('CBO_Email', $request->cbo_email )->latest()->get();

            $data =[
                'cbo_details' => $cob_details,
                'wards' => $wards
            ];

            return $data;
            
        } catch (\Throwable $th) {
            //throw $th;
      
            return $th;

        }
    


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

       

        if ($email = User::where('email', $request->email)->first()) {
            # code...
            $user_data = false;

            return $user_data;
        }else{

            $cbo = Cbo::create($request->all());

            $user_data = User::create([
                'name' => $request->cbo_name,
                'email' => $request->email,
                'password' => Hash::make($request->phone),
                'role' => 'hcbo'
            ]);
    
            // $user =[
            //     'validatedData' => $validatedData,
            //     'user' => $user_data
            // ];

    
            return $user_data;

        }


    }

    public function upload_cbo_report(Request $request)
    {
        
        
        return 23;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function show(Cbo $cbo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cbo $cbo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cbo $cbo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cbo $cbo)
    {
        //
    }
}
