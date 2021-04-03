<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->string('ward_name');
            $table->string('lga');
            $table->string('state');
            $table->bigInteger('state_id')->unsigned()->nullable();
            $table->bigInteger('lga_id')->unsigned()->nullable();
           
          
            $table->string('status')->default('active');

            
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('lga_id')->references('id')->on('lgas');
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
        Schema::dropIfExists('wards');
    }
}
