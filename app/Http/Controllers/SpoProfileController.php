<?php

namespace App\Http\Controllers;

use App\SpoProfile;
use App\User;
use App\Imports\SpoImports;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SpoProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import_spos()
    {
        //
        
            //code...


    try {
        //code...
        $cbo_imports= Excel::import(new SpoImports, 'spos_excel.xlsx');

        return $cbo_imports;
    } catch (\Throwable $th) {
        //throw $th;
        return $th;
    }
        


        
       
    }

    public function getAllSPOs()
    {
        //
        try {
            
            $cbos = SpoProfile::all();

            return $cbos;
        } catch (\Throwable $th) {
            //throw $th;
           

            return $th;
        }


    }


    public function getSingleSPO(Request $request)
    {
        # code...

        try {
            //code...
            $spo_details = SpoProfile::with('reports')->latest()->where('email', $request->spo_email)->first();

            return $spo_details;
            
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
    public function create_spo(Request $request)
    {
        //

        try {
            //code...

            if ($email = User::where('email', $request->email)->first()) {
                # code...
                $user_data = false;
    
                return $user_data;
            }else{
    
                $spo = SpoProfile::create($request->all());
    
                $user_data = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->phone),
                    'role' => 'spo'
                ]);
        
                // $user =[
                //     'validatedData' => $validatedData,
                //     'user' => $user_data
                // ];
    
        
                return $user_data;
    
            }
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }

        



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpoProfile  $spoProfile
     * @return \Illuminate\Http\Response
     */
    public function show(SpoProfile $spoProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpoProfile  $spoProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(SpoProfile $spoProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpoProfile  $spoProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpoProfile $spoProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpoProfile  $spoProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpoProfile $spoProfile)
    {
        //
    }
}
