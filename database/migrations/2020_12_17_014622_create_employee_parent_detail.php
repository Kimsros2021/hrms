<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeParentDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_parent_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->char('father_name', 50);
            $table->char('mother_name', 50);
            $table->char('mother_occupation', 50);
            $table->char('father_occupation', 50);
            $table->char('house', 20);
            $table->char('street', 20);
            $table->char('group', 50);
            $table->char('village_code', 50);
            $table->char('mobile_phome', 20);
            $table->char('home_phone', 20);
            $table->integer('create_by');
            $table->boolean('status');
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
        Schema::dropIfExists('employee_parent_detail');
    }
}
