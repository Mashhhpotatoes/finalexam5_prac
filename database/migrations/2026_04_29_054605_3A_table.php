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
        Schema::create('3a_tbl', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->string('add');
            $table->date('dobirth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
