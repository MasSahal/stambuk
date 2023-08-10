<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.mapel.index', [
            'title' => "Data Mata Pelajaran| STAMBUK",
            'record' => Mapel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mapel.create', [
            'title' => "Tambah Mata Pelajaran | STAMBUK",
            'mapel' => Mapel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'type' => 'required',
            'deskripsi' => 'required',
        ]);


        $insert = Mapel::Create($request->all());
        if ($insert) {
            return redirect()->route("mapel.index")->with("success", "Data Mata Pelajaran $request->nama_mapel berhasil ditambahkan!");
        } else {
            return back()->withErrors('Gagal membuat data Mata Pelajaran!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mapel $mapel)
    {
        $record = $mapel;
        if (auth()->user()->role == 2) {
            $user = DB::table('kelas')->where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = DB::table('kelas')->where('idwali_kelas', '=', $user->idwali_kelas)->first();


            // $mapel = DB::table('mapel')->rightJoin('nilai', 'mapel.idmapel', '=', 'nilai.id_mapel')->rightJoin('siswa', 'nilai.idsiswa', '=', 'siswa.idsiswa')->where('siswa.idkelas', $user->idkelas)->get();
            // $mapel = DB::table('siswa')->rightJoin('nilai', 'siswa.idsiswa', '=', 'nilai.idsiswa')->where('idkelas', '=', $user->idkelas)->where('nilai.id_mapel', '=', $mapel->idmapel)->get();
            $nilai = DB::table('nilai')->rightJoin('siswa', 'nilai.idsiswa', '=', 'siswa.idsiswa')->where('idkelas', '=', $user->idkelas)->get();
            // dd($nilai);
            $siswa = Siswa::all();
        } else {
            $mapel = DB::table('mapel')->rightJoin('nilai', 'mapel.idmapel', '=', 'nilai.id_mapel')->rightJoin('siswa', 'nilai.idnilai', '=', 'siswa.idsiswa')->get();
        }
        return view('admin.mapel.view', compact('record', 'nilai', 'siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        $record = $mapel;
        $mapel = Mapel::all();
        return view('admin.mapel.edit', compact('record', 'mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'type' => 'required',
            'deskripsi' => 'required',
        ]);
        $insert = $mapel->update($request->all());
        if ($insert) {
            return redirect()->route("mapel.index")->with("success", "Data Mata Pelajaran $request->nama_mapel berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data mata pelajaran!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        $del = $mapel->delete();
        if ($del) {
            return redirect()->route("mapel.index")->with("success", "Data mata pelajaran berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data mata pelajaran!');
        }
    }
}
