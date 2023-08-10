<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Raport;
use App\Models\Siswa;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role == 2) {
            $walas = Walas::where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = Kelas::where('idwali_kelas', '=', $walas->idwali_kelas)->first();
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('kelas.idkelas', '=', $kelas->idkelas)->get();
        } else {
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->get();
            $kelas = null;
        }

        return view('admin.siswa.index', [
            'title' => "Data Siswa | STAMBUK",
            'record' => $siswa,
            'kelas' => $kelas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role == 2) {
            $walas = Walas::where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = Kelas::where('idwali_kelas', '=', $walas->idwali_kelas)->first();
        } else {
            $kelas = Kelas::all();
        }
        return view('admin.siswa.create', [
            'title' => "Tambah Siswa | STAMBUK",
            'kelas' => $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "idkelas" => "required",
            "nama_siswa" => "required",
            "no_induk" => "required",
            "nis" => "required",
            "tempat_lahir" => "required",
            "tgl_lahir" => "required",
            "jenis_kelamin" => "required",
            "agama" => "required",
            "anak_ke" => "required",
            "alamat_siswa" => "required",
            "nama_ayah" => "required",
            "nama_ibu" => "required",
            "pekerjaan_ayah" => "required",
            "pekerjaan_ibu" => "required",
            "jalan" => "required",
            "kelurahan_desa" => "required",
            "kecamatan_kota" => "required",
            "kabupaten_kota" => "required",
            "provinsi" => "required",
        ]);

        $insert = Siswa::Create($request->all());

        //add blank raport
        Raport::Create([
            'idsiswa' => $insert->idsiswa,
        ]);

        if ($insert) {
            return redirect()->route("siswa.index")->with("success", "Data siswa $request->nama_siswa berhasil ditambahkan!");
        } else {
            return back()->withErrors('Gagal membuat data siswa!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Siswa $siswa)
    {
        $aksi = $request->aksi ?? "";
        if ($aksi == "nilai") {
            $record = $siswa;
            return view('admin.siswa.view_b', compact('record'));
        } elseif ($aksi == "raport") {
            $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->join('raport', 'raport.idsiswa', '=', 'siswa.idsiswa')->where('siswa.idsiswa', '=', $siswa->idsiswa)->first();
            $raport = DB::table('raport')->where('idsiswa', $siswa->idsiswa)->first();
            $kelas = Kelas::all();
            $nilai_u = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'utama')->where('idsiswa', '=', $siswa->idsiswa)->get();
            $nilai_m = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'mulok')->where('idsiswa', '=', $siswa->idsiswa)->get();
            return view('admin.siswa.view_r', compact('record', 'kelas', 'raport', 'nilai_m', 'nilai_u'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        if (auth()->user()->role == 2) {
            $walas = Walas::where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = Kelas::where('idwali_kelas', '=', $walas->idwali_kelas)->get();
        } else {
            $kelas = Kelas::all();
        }
        $record = $siswa;
        return view('admin.siswa.edit', compact('record', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            "idkelas" => "required",
            "nama_siswa" => "required",
            "no_induk" => "required",
            "nis" => "required",
            "tempat_lahir" => "required",
            "tgl_lahir" => "required",
            "jenis_kelamin" => "required",
            "agama" => "required",
            "anak_ke" => "required",
            "alamat_siswa" => "required",
            "nama_ayah" => "required",
            "nama_ibu" => "required",
            "pekerjaan_ayah" => "required",
            "pekerjaan_ibu" => "required",
            "jalan" => "required",
            "kelurahan_desa" => "required",
            "kecamatan_kota" => "required",
            "kabupaten_kota" => "required",
            "provinsi" => "required",
        ]);
        $insert = $siswa->update($request->all());
        if ($insert) {
            return redirect()->route("siswa.index")->with("success", "Data siswa $request->nama_siswa berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data siswa!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $del = $siswa->delete();
        if ($del) {
            return redirect()->route("siswa.index")->with("success", "Data siswa berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data siswa!');
        }
    }
}
