<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeExperienceDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_experience_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->char('number_of_experience_year', 3);
            $table->char('sector');
            $table->char('company_name', 50);
            $table->char('last_position', 50);
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
        Schema::dropIfExists('employee_experience_detail');
    }
}
