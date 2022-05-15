<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExamStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exam_student', function (Blueprint $table) {
            $table->foreign(['exam_id'])->references(['id'])->on('exams');
            $table->foreign(['student_id'])->references(['id'])->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_student', function (Blueprint $table) {
            $table->dropForeign('exam_student_exam_id_foreign');
            $table->dropForeign('exam_student_student_id_foreign');
        });
    }
}
