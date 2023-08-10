<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class K_Nilai extends Model
{
    use HasFactory;

    protected $table = "kriteria_nilai";
    protected $primaryKey = "idkriteria";
    protected $fillable = [
        'idmapel',
        'kriteria',
    ];
}
