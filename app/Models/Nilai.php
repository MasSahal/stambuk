<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = "nilai";
    protected $primaryKey = "idnilai";
    protected $fillable = [
        "idsiswa",
        "id_mapel",
        "p_nilai",
        "p_predikat",
        "p_deskripsi",
        "k_nilai",
        "k_predikat",
        "k_deskripsi",
    ];
}
