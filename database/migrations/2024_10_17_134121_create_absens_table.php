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
        Schema::create('absens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('divisi', ['dh' , 'mpr' , 'div 1' , 'div 2' , 'div 3' , 'div 4' , 'div 5' , 'div 6' , 'div 7' , 'div 8' , 'div 9' , 'div 10']);
            $table->enum('posisi', ['depan' , 'belakang']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absens');
    }
};
