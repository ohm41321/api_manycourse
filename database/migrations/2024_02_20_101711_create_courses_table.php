<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('course_code')->primary();
            $table->string('course_name');
            $table->string('descriptions');
            $table->unsignedBigInteger('categories_id');
            $table->string('instructors_code');

            $table->timestamps();
  
            $table->foreign('categories_id')
                  ->references('categories_id')
                  ->on('categories')
                  ->onDelete('cascade');

            $table->foreign('instructors_code') 
                  ->references('instructors_code') 
                  ->on('instructors')
                  ->onDelete('cascade');    
                  
 
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['categories_id']);
            $table->dropForeign(['instructors_code']);
        });


        Schema::dropIfExists('courses');
    }
};
