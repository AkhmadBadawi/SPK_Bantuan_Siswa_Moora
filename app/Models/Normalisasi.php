<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    protected $table = 'normalisasi'; 
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_alternatif',
        'C1',
        'C2',
        'C3',
        'C4',
        'C5',
        'C6',
    ];
}
