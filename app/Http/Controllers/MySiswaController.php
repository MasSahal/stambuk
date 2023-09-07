<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MySiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mode = $request->mod ?? "";

        if ($mode == "raport") {
            $siswa = DB::table('siswa')->where('idsiswa', '=', auth()->user()->id_join)->first();
            $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->join('raport', 'raport.idsiswa', '=', 'siswa.idsiswa')->where('siswa.idsiswa', '=', $siswa->idsiswa)->first();
            $raport = DB::table('raport')->where('idsiswa', $siswa->idsiswa)->first();
            $nilai_u = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'utama')->where('idsiswa', '=', $siswa->idsiswa)->get();
            $nilai_m = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'mulok')->where('idsiswa', '=', $siswa->idsiswa)->get();
            return view('mysiswa.raport', [
                'record' => $record,
                'raport' => $raport,
                'nilai_u' => $nilai_u,
                'nilai_m' => $nilai_m,
            ]);
            return view('mysiswa.index');
        } else if ($mode == "profile") {
            $siswa = DB::table('siswa')->where('idsiswa', '=', auth()->user()->id_join)->first();
            return view('mysiswa.profile', [
                'record' => $siswa
            ]);
        } else if ($mode == "edit") {
            $siswa = DB::table('siswa')->where('idsiswa', '=', auth()->user()->id_join)->first();
            return view('mysiswa.edit', [
                'record' => $siswa
            ]);
        } else if ($mode == "nilai") {
            $siswa = DB::table('siswa')->where('idsiswa', '=', auth()->user()->id_join)->first();
            $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('siswa.idsiswa', '=', $siswa->idsiswa)->first();
            $nilai = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('nilai.idsiswa', '=', $siswa->idsiswa)->get();
            return view('mysiswa.nilai', compact('record', 'nilai'));
        } else {
            return view('mysiswa.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->to(route('mysiswa.index', ['mod' => 'raport']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = DB::table('siswa')->where('idsiswa', '=', $id)->first();
        // dd($record);
        return view('mysiswa.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
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

        $data = [
            "nama_siswa" => $request->nama_siswa,
            "no_induk" => $request->no_induk,
            "nis" => $request->nis,
            "tempat_lahir" => $request->tempat_lahir,
            "tgl_lahir" => $request->tgl_lahir,
            "jenis_kelamin" => $request->jenis_kelamin,
            "agama" => $request->agama,
            "anak_ke" => $request->anak_ke,
            "alamat_siswa" => $request->alamat_siswa,
            "nama_ayah" => $request->nama_ayah,
            "nama_ibu" => $request->nama_ibu,
            "pekerjaan_ayah" => $request->pekerjaan_ayah,
            "pekerjaan_ibu" => $request->pekerjaan_ibu,
            "jalan" => $request->jalan,
            "kelurahan_desa" => $request->kelurahan_desa,
            "kecamatan_kota" => $request->kecamatan_kota,
            "kabupaten_kota" => $request->kabupaten_kota,
            "provinsi" => $request->provinsi,
        ];

        $data2 = [
            'name' => $request->nama_siswa,
        ];

        $update = DB::table('siswa')->where('idsiswa', '=', $id)->update($data);
        DB::table('users')->where('role', '=', 0)->where('id_join', '=', $id)->update($data2);

        if ($update) {
            return redirect()->route("mysiswa.show", $id)->with("success", "Data siswa berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data siswa!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
