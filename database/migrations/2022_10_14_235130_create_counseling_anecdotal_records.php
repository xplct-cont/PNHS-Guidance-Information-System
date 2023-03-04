<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingAnecdotalRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_anecdotal_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned();
            $table->dateTime('date_time_called')->nullable();
            $table->string('reasons_for_contact')->nullable();
            $table->string('referred_by')->nullable();
            $table->longText('reasons_for_referral')->nullable();
            $table->longText('follow_up_counseling_session')->nullable();
            $table->longText('behavior_observed')->nullable();
            $table->longText('interview_findings')->nullable();
            $table->longText('clinical_impressions')->nullable();
            $table->longText('recommendation')->nullable();
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
        Schema::dropIfExists('counseling_anecdotal_records');
    }
}
