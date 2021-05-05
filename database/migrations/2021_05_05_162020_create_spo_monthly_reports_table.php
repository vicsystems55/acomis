<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpoMonthlyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spo_monthly_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('spo_id')->unsigned();
            $table->string('date');
            $table->string('file_upload');
            $table->string('text_report')->nullable();
            $table->foreign('spo_id')->references('id')->on('spo_profiles');
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
        Schema::dropIfExists('spo_monthly_reports');
    }
}
