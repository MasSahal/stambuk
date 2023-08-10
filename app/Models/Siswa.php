<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";
    protected $primaryKey = "idsiswa";
    protected $fillable = [
        "idkelas",
        "nama_siswa",
        "no_induk",
        "nis",
        "tempat_lahir",
        "tgl_lahir",
        "jenis_kelamin",
        "agama",
        "anak_ke",
        "alamat_siswa",
        "nama_ayah",
        "nama_ibu",
        "pekerjaan_ayah",
        "pekerjaan_ibu",
        "jalan",
        "kelurahan_desa",
        "kecamatan_kota",
        "kabupaten_kota",
        "provinsi",
        "nama_wali",
        "pekerjaan_wali",
        "alamat_wali",
        "foto",
    ];
}
