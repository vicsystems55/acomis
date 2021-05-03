<?php

namespace App\Http\Controllers;

use App\CboMonthlyReport;
use Illuminate\Http\Request;

class CboMonthlyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function load_cbo_report(Request $request)
    {
        //
        $cbo_monthly_reports = CboMonthlyReport::where('cbo_id', $request->cbo_id)->latest()->get();

        return $cbo_monthly_reports;
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
        try {
         
        $report = CboMonthlyReport::create([
            'cbo_id' => $request->cbo_id,
            'date' => $request->date,
            'file_upload' => $request->file_upload,
            'text_report' => serialize($request->text_report),
        ]);

        return $report;

        } catch (\Throwable $th) {
            //throw $th;

        return $th;

        }
        //
        // $report = CboMonthlyReport::create([
        //     'cbo_id' => $request->cbo_id,
        //     'date' => $request->date,
        //     'file_upload' => $request->file_upload,
        //     'text_report' => $request->text_report,
        // ]);

        // return $request->all();
    }

    public function upload_cbo_report(Request $request)
    {
        
        $image = $request->file('file');

        $newname = rand(233,9000).'.'.$image->getClientOriginalExtension();

        $image->move(public_path('cbo_monthly_report'), $newname);

        return $newname;

        // return 123;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CboMonthlyReport  $cboMonthlyReport
     * @return \Illuminate\Http\Response
     */
    public function show(CboMonthlyReport $cboMonthlyReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CboMonthlyReport  $cboMonthlyReport
     * @return \Illuminate\Http\Response
     */
    public function edit(CboMonthlyReport $cboMonthlyReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CboMonthlyReport  $cboMonthlyReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CboMonthlyReport $cboMonthlyReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CboMonthlyReport  $cboMonthlyReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(CboMonthlyReport $cboMonthlyReport)
    {
        //
    }
}
