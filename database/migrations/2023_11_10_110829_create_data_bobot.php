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
        Schema::create('data_bobot', function (Blueprint $table) {
            $table->id();
            $table->string('sub_kriteria', 50);
            $table->string('keterangan', 50);
            $table->integer('bobot');
            $table->string('id_kriteria', 10);

            $table->foreign('id_kriteria')->references('id_kriteria')->on('data_kriteria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_bobot');
    }
};
