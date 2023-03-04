<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnecdotalRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anecdotal_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->dateTime('observation_date_time')->nullable();
            $table->longText('description_of_incident')->nullable();
            $table->longText('location_of_incidents')->nullable();
            $table->longText('actions_taken')->nullable();
            $table->longText('recommendations')->nullable();
            $table->timestamps();


            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anecdotal_records');
    }
}
