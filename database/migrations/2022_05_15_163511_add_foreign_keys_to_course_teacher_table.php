<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCourseTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_teacher', function (Blueprint $table) {
            $table->foreign(['course_id'])->references(['id'])->on('courses');
            $table->foreign(['teacher_id'])->references(['id'])->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_teacher', function (Blueprint $table) {
            $table->dropForeign('course_teacher_course_id_foreign');
            $table->dropForeign('course_teacher_teacher_id_foreign');
        });
    }
}
