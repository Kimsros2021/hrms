<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeEducationDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_education_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->char('education_level', 50);
            $table->char('major_subject', 50);
            $table->boolean('educcation_status');
            $table->char('university_or_school', 50);
            $table->timestamp('create_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_education_detail');
    }
}
