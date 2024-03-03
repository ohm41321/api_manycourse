<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table -> unsignedBigInteger('categories_id')->primary();
            $table -> string('categories_name', 50);
            $table -> timestamps(0);


        });
    }
    public function down(): void
    {

        Schema::dropIfExists('categories');
    }
};
