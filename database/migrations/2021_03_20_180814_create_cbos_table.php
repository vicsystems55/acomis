<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbos', function (Blueprint $table) {
            $table->id();
            $table->string('cbo_name');
            $table->string('contact_person');
            $table->string('email');
            $table->string('phone');
            $table->string('state');
            $table->string('lga');
            $table->string('address');
            $table->string('status')->default('active');
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
        Schema::dropIfExists('cbos');
    }
}
