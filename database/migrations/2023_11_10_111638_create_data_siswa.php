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
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->string('id_alternatif', 10)->primary();
            $table->string('nama_siswa', 50);
            $table->integer('kelas');  
            $table->string('pekerjaan_ortu', 50);
            $table->string('penghasilan_ortu',50);
            $table->string('tanggungan_ortu',50);
            $table->string('nilai_rapot',50);
            $table->string('status_ortu', 50);
            $table->string('program', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswa');
    }
};
