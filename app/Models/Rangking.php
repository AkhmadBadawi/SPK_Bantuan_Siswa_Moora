<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rangking extends Model
{
    use HasFactory;
    protected $table = 'rangking'; 
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'rangking',
        'id_alternatif',
        'y',
    ];
}
