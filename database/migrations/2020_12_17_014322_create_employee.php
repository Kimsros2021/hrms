<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name_en');
            $table->string('last_name_en');
            $table->enum('gender', ['Male', 'Female']);
            $table->timestamp('date_of_birth');
            $table->timestamp('join_date');
            $table->string('email');
            $table->string('password');
            $table->integer('department_id');
            $table->integer('position_id');
            $table->string('telephone');
            $table->string('office_phone')->nullable();
            $table->integer('salary');
            $table->string('bank_name');
            $table->string('bank_account');
            $table->boolean('status');
            $table->integer('create_by')->nullable(false);
            $table->timestamp('create_date')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
