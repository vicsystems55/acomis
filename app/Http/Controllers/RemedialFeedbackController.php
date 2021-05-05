<?php

namespace App\Http\Controllers;

use App\RemedialFeedback;
use Illuminate\Http\Request;

class RemedialFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_signed_copy(Request $request)
    {
        //

        try {
            //code...
            $image = $request->file('file');

            $newname = rand(233,9000).'.'.$image->getClientOriginalExtension();
    
            $image->move(public_path('remedial_signed_copy'), $newname);
    
            return $newname;
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
    public function sumbit_remedial_report(Request $request)
    {
        //

        // $monthly_feedback = RemedialFeedback::create();

        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RemedialFeedback  $remedialFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(RemedialFeedback $remedialFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RemedialFeedback  $remedialFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(RemedialFeedback $remedialFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RemedialFeedback  $remedialFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RemedialFeedback $remedialFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RemedialFeedback  $remedialFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemedialFeedback $remedialFeedback)
    {
        //
    }
}
