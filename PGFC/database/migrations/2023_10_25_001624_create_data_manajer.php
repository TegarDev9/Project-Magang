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
        Schema::create('data_manajer', function (Blueprint $table) {
            $table->id();
            $table->integer('data_manajer_id');
            $table->string('nama'); 
            $table->string('hp');
            $table->string('alamat');
            $table->string('foto');
            $table->string('ktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_manajer');
    }
};
