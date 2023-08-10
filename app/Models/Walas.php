<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    use HasFactory;

    protected $table = "wali_kelas";
    protected $primaryKey = "idwali_kelas";
    protected $fillable = [
        'idwali_kelas',
        'nama',
        'nip',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'agama',
        'email',
    ];
}
