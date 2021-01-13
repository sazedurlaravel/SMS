<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('id_no');
            $table->integer('class_id');
            $table->integer('year_id');
            $table->integer('exam_type_id');
            $table->integer('subject_id');
            $table->string('cq_marks')->nullable();
            $table->string('mcq_marks')->nullable();
            $table->string('practical_marks')->nullable();
            $table->string('class_attendence')->nullable();
            $table->string('total_marks');
            $table->integer('grade_id');
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
        Schema::dropIfExists('mark_entries');
    }
}
