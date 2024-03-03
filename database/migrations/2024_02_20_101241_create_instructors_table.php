<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Instructors', function (Blueprint $table) {
            $table->string('instructors_code')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->unsignedBigInteger('categories_id');
            $table->timestamps();
  
            $table->foreign('categories_id')
                  ->references('categories_id')
                  ->on('categories')
                  ->onDelete('cascade');
                  
 
        });
    }

    public function down(): void
    {
        Schema::table('instructors', function (Blueprint $table) {
            $table->dropForeign(['categories_id']);
        });


        Schema::dropIfExists('instructors');
    }
};
