<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemedialFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remedial_feedback', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cbo_id')->unsigned();
            $table->string('cbo_state');
            $table->string('cbo_lga');
            $table->string('cbo_name');
            $table->string('ward');
            $table->string('date');
            $table->string('tracker_type');
            $table->string('key_findings');
            $table->string('root_cause');
            $table->string('action_taken');
            $table->string('resolved_status');
            $table->string('followup_action');
            $table->string('responsibility');
            $table->string('time_line');
            $table->string('attached_signed_copy');
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
        Schema::dropIfExists('remedial_feedback');
    }
}
