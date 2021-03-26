<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_facilities', function (Blueprint $table) {
            $table->id();
            $table->string('STATE');
            $table->string('LGA');
            $table->string('Ward');
            $table->string('Facility');
            $table->string('CBO');
            $table->bigInteger('CBO_id')->unsigned()->nullable();
            $table->string('CBO_Email');
            $table->string('SPO');
            $table->string('SPO_Email');
            $table->string('status');

            $table->foreign('CBO_id')->references('id')->on('cbos');
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
        Schema::dropIfExists('health_facilities');
    }
}
