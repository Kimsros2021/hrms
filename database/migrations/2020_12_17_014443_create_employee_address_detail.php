<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAddressDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_address_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('current_house');
            $table->string('current_street');
            $table->string('current_group');
            $table->string('current_village_code');
            $table->string('permanent_house');
            $table->string('permanent_street');
            $table->string('permanent_group');
            $table->string('permanent_village_code');
            $table->integer('create_by')->nullable(false);
            $table->timestamp('create_date');
            $table->boolean('status')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_address_detail');
    }
}
