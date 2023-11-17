<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'data_siswa'; 
    protected $primaryKey = 'id_alternatif';
    protected $fillable = [
        'id_alternatif',
        'nama_siswa',
        'kelas',
        'pekerjaan_ortu',
        'penghasilan_ortu',
        'tanggungan_ortu',
        'nilai_rapot',
        'status_ortu',
        'program',
    ];
}
