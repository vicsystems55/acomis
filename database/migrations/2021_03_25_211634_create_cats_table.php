<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('cbo');
            $table->bigInteger('cbo_id')->unsigned();
            $table->string('physical_contact_address');
            $table->date('date_of_engagement');
            $table->date('date_of_establishment');
            $table->string('status')->default('active');

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
        Schema::dropIfExists('cats');
    }
}
