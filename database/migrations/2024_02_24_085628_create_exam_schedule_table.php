<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_schedule', function (Blueprint $table) {
            $table->id('exam_schedule_id');
            $table->string('course_code');
            $table->date('exam_date');
            $table->time('exam_time');
            $table->string('exam_location');
            $table->integer('exam_duration');
            $table->timestamps();

            $table->foreign('course_code')
                  ->references('course_code')
                  ->on('courses')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_schedule', function (Blueprint $table) {
            $table->dropForeign(['course_code']);
        });

        Schema::dropIfExists('exam_schedule');
    }
};
