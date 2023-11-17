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
        Schema::create('normalisasi', function (Blueprint $table) {
            $table->id();
            $table->string('id_alternatif', 10)->default('Null');;
            $table->float('C1')->default(0);;
            $table->float('C2')->default(0);;  
            $table->float('C3')->default(0);;  
            $table->float('C4')->default(0);;  
            $table->float('C5')->default(0);;  
            $table->float('C6')->default(0);;

            $table->foreign('id_alternatif')->references('id_alternatif')->on('data_siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normalisasi');
    }
};
