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
            $table->bigIncrements('id')->nullable(false);
            $table->string('first_name_en')->nullable(false);
            $table->string('last_name_en')->nullable(false);
            $table->enum('gender', ['Male', 'Female'])->nullable(false);
            $table->timestamp('date_of_birth')->nullable(false);
            $table->timestamp('join_date')->nullable(false);
            $table->string('email');
            $table->string('password');
            $table->integer('department_id')->nullable(false);
            $table->integer('position_id')->nullable(false);
            $table->string('telephone')->nullable(false);
            $table->string('office_phone')->unique();
            $table->integer('salary')->nullable(false);
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
