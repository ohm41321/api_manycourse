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
        Schema::create('course_schedules', function (Blueprint $table) {
            $table->id('course_schedule_id');
            $table->string('course_code');
            $table->date('schedule_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('location');
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
        Schema::table('course_schedules', function (Blueprint $table) {
            $table->dropForeign(['course_code']);
        });

        Schema::dropIfExists('course_schedules');
    }
};  
