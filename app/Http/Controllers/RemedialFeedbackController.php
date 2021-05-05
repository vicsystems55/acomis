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
        try {

            $monthly_feedback = RemedialFeedback::create([
                'cbo_id' => $request->cbo_id,
                'cbo_state' => $request->cbo_state,
                'cbo_lga' => $request->cbo_lga,
                'ward' => $request->ward,
                'cbo_name' => $request->cbo_name,
                'tracker_type' => $request->tracker_type,
                'key_findings' => $request->key_findings,
                'root_cause' => $request->root_cause,
                'action_taken' => $request->action_taken,
                'resolved_status' => $request->resolved_status,
                'followup_action' => $request->followup_action,
                'responsibility' => $request->responsibility,
                'date' => $request->date,
                'time_line' => $request->time_line,
                'attached_signed_copy' => $request->attached_signed_copy
            ]);

            return $monthly_feedback;
            
            
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }


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
