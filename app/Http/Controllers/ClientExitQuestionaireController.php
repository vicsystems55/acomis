<?php

namespace App\Http\Controllers;

use App\ClientExitQuestionaire;
use App\QuestionBank;
use App\Notification;
use Auth;
use Illuminate\Http\Request;

class ClientExitQuestionaireController extends Controller
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
    public function submit_exit_form(Request $request)
    {
        //

        $user_id = Auth::user()->id;

        // $questions = QuestionBank::all();

        $questionaire_code = rand(123, 999);

        for ($i=0; $i<5; $i++) { 

       

            $entry = ClientExitQuestionaire::Create([
                'cbo_id' => Auth::user()->id,
                'questionaire_code' => $questionaire_code,
                'question_id' => $request->questions[$i]['id'],
                'questions' => $request->questions[$i]['question'],
                'answers' => $request->answers[$i],
                'status' => 'answered',
            ]);
            
        }

        $notification = Notification::create([
            'user_id' => $user_id,
            'title' => "New Questionaire Received",
            'body' => 'A new questionaire has just been received it questionaire code : ' .$questionaire_code
          
        ]);

        // return $request->questions[0]['question'];

        // return $request->answers[0];

        // return count($request->questions);

        return $entry;




       


        // $entry = ClientExitQuestionaire::Create([

        // ]);


    }

    public function questionaire_data()
    {
        # code...'
        $analysis = ClientExitQuestionaire::where('question_id', '13')->where('answers', 'yes')->get();


        return $analysis;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientExitQuestionaire  $clientExitQuestionaire
     * @return \Illuminate\Http\Response
     */
    public function show(ClientExitQuestionaire $clientExitQuestionaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientExitQuestionaire  $clientExitQuestionaire
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientExitQuestionaire $clientExitQuestionaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientExitQuestionaire  $clientExitQuestionaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientExitQuestionaire $clientExitQuestionaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientExitQuestionaire  $clientExitQuestionaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientExitQuestionaire $clientExitQuestionaire)
    {
        //
    }
}
