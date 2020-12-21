<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSalarylogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_salarylogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->comment('employee_id=user_id');
            $table->integer('previous_salary');
            $table->integer('present_salary');
            $table->integer('increment_salary');
            $table->date('effected_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_salarylogs');
    }
}
