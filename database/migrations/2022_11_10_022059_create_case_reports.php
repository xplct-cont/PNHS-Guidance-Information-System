<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('victim_name')->nullable();
            $table->string('grade_section')->nullable();
            $table->string('sex')->nullable();
            $table->date('date_reported')->nullable();
            //respondent
            $table->string('resp_name')->nullable();
            $table->string('resp_grade_section')->nullable();
            $table->string('resp_sex')->nullable();
            $table->string('nature_of_complaint')->nullable();
            $table->string('actions_taken')->nullable();
            $table->string('recommendations')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_reports');
    }
}
