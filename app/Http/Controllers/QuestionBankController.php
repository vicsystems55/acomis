<?php

namespace App\Http\Controllers;

use App\QuestionBank;
use Illuminate\Http\Request;

class QuestionBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getQuestions()
    {
        //
        $questions = QuestionBank::get();

        return $questions;
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
     * @param  \App\QuestionBank  $questionBank
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionBank $questionBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionBank  $questionBank
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionBank $questionBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionBank  $questionBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionBank $questionBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionBank  $questionBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionBank $questionBank)
    {
        //
    }
}
