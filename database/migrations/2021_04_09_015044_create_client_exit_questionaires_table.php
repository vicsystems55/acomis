<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientExitQuestionairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_exit_questionaires', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cbo_id')->unsigned();
            $table->string('questionaire_code');
            $table->string('question_id');
            $table->string('answers');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_exit_questionaires');
    }
}
