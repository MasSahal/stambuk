<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    use HasFactory;

    protected $table = "raport";
    protected $primaryKey = "idraport";
    protected $fillable = array(
        'idsiswa',
        'nama_siswa',
        'nisn',
        'nama_sekolah',
        'alamat_sekolah',
        'kelas',
        'semester',
        'th_pelajaran',
        'sikap_spiritual',
        'sikap_sosial',
        'eskul1',
        'deskripsi_eskul1',
        'eskul2',
        'deskripsi_eskul2',
        'eskul3',
        'deskripsi_eskul3',
        'saran',
        'tinggi_badan',
        'berat_badan',
        'pendengaran',
        'penglihatan',
        'gigi',
        'prestasi1',
        'ket_pres1',
        'prestasi2',
        'ket_pres2',
        'sakit',
        'izin',
        'tanpa_ket'
    );
}
