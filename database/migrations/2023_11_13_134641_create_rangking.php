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
        Schema::create('rangking', function (Blueprint $table) {
            $table->id();
            $table->integer('rangking');
            $table->string('id_alternatif', 10);
            $table->float('y');

            $table->foreign('id_alternatif')->references('id_alternatif')->on('data_siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rangking');
    }
};
