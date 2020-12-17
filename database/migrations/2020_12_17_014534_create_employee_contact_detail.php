<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeContactDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_contact_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->char('identification_number', 20);
            $table->enum('blood_group', ['AB+', 'AB-', 'A+', 'A-', 'B+', 'B-', 'O+', 'O-']);
            $table->char('religion', 50);
            $table->boolean('maritail_status');
            $table->char('spoue_name', 50);
            $table->date('date_of_birth');
            $table->char('spouse_occupation', 50);
            $table->char('education_level');
            $table->char('mobile_phone', 20);
            $table->integer('create_by');
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
        Schema::dropIfExists('employee_contact_detail');
    }
}
