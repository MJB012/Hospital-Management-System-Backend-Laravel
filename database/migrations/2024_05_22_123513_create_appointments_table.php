<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_case_id');
            $table->foreign('patient_case_id')->references('id')->on('patient_cases')->onDelete('cascade');
            $table->unsignedBigInteger('case_id');
            $table->foreign('case_id')->references('id')->on('case_types')->onDelete('cascade');
            $table->unsignedBigInteger('appointment_type_id');
            $table->foreign('appointment_type_id')->references('id')->on('appointment_types');
            $table->unsignedBigInteger('practice_id');
            $table->foreign('practice_id')->references('id')->on('practice_location');
            $table->unsignedBigInteger('speciality_id');
			$table->foreign('speciality_id')->default(1)->references('id')->on('specialities');
            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('appointment_date');
            $table->unsignedBigInteger('appointment_time_id');
            $table->foreign('appointment_time_id')->references('id')->on('sppointment_times')->onDelete('cascade');
            $table->bigInteger('duration');
            $table->boolean('confirmed');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
