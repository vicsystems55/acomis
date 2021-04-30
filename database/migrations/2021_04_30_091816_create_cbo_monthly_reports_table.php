<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCboMonthlyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbo_monthly_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cbo_id')->unsigned();
            $table->string('date');
            $table->string('file_upload');
            $table->string('text_report')->nullable();
            $table->foreign('cbo_id')->references('id')->on('cbos');
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
        Schema::dropIfExists('cbo_monthly_reports');
    }
}
