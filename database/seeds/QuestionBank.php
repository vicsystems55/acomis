<?php

use Illuminate\Database\Seeder;

class QuestionBank extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('question_banks')->insertOrIgnore([

            [
                "question" => "Can I Proceed with the interview",
               
            ],
            [
                "question" => "Name of Respondant",
               
            ],
            [
                "question" => "Child's Name (Where Applicable)",
               
            ],
            [
                "question" => "Respondant Category",
               
            ],
            [
                "question" => "Address (Detailed Address)",
               
            ],

            [
                "question" => "Telephone Number",
               
            ],

            [
                "question" => "Name of Health Facility where interview is conducted",
               
            ],

            [
                "question" => "Occupation",
               
            ],

            [
                "question" => "Educational Background",
               
            ],

            [
                "question" => "Which One you came for?",
               
            ],

            [
                "question" => "Which One did you receive",
               
            ],

            [
                "question" => "Frequency of visit within 3 months",
               
            ],

            [
                "question" => "Did you receive LLIN?",
               
            ],

            [
                "question" => "What Frequency?",
               
            ],

            [
                "question" => "Frequency of IPT Administration",
               
            ],

            [
                "question" => "Did You Swallow the (SP-Sulfadoxin-Pyrimethamine 3 White tabs)?",
               
            ],

            [
                "question" => "Services (Show Question if Prv Q is NO)",
               
            ],

            [
                "question" => "Was your Child given Seasonal Malaria Chemoprevention (SMC)?",
               
            ],

            [
                "question" => "If Yes to Prv Qs: How old was the child when given?",
               
            ],

            [
                "question" => "Were You Tested for Malaria?",
               
            ],

            [
                "question" => "Were You given Arthemisinin-based-Combination Therapy",
               
            ],

            [
                "question" => "IF Yes to Prv Q, Did You Finish the Drug?",
               
            ],

            [
                "question" => "How satisfied are you with the service(s) you received today?",
               
            ],

            [
                "question" => "What is responsible for your choice above?",
               
            ],

            [
                "question" => "If Satisfied, What might have helped you to be more satisfied with the service tou received today?",
               
            ],

            [
                "question" => "If you could make at least one suggestion for improving services at this health facility, what would?",
               
            ],


            
            
        ]);
            
    }
}
