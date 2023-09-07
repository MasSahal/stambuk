<?php

namespace App\Http\Controllers;

use App\Models\GuruMapel;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guru_mapel.index', [
            'title' => "Data Guru Mata Pelajaran | STAMBUK",
            'record' => DB::table('guru_mapel')->join('mapel', 'guru_mapel.idmapel', '=', 'mapel.idmapel')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru_mapel.create', [
            'title' => "Tambah Guru Mata Pelajaran | STAMBUK",
            'mapel' => DB::table('mapel')->leftJoin('guru_mapel', 'mapel.idmapel', '=', 'guru_mapel.idmapel')->whereNull('guru_mapel.idmapel')->select('mapel.*')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required|max:20',
            'jenis_kelamin' => 'required',
            'idmapel' => 'required',
        ]);

        $insert = GuruMapel::Create($request->all());
        if ($insert) {
            return redirect()->route("guru_mapel.index")->with("success", "Data Guru Mata Pelajaran $request->nama_guru berhasil ditambahkan!");
        } else {
            return back()->withErrors('Gagal membuat data Guru Mata Pelajaran!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruMapel $guru_mapel)
    {
        $record = $guru_mapel;
        $wali_kelas = GuruMapel::all();
        return view('admin.guru_mapel.view', compact('record', 'wali_kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruMapel $guru_mapel)
    {
        $record = $guru_mapel;
        $mapel =  Mapel::all();
        return view('admin.guru_mapel.edit', compact('record', 'mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GuruMapel $guru_mapel)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required|max:20',
            'jenis_kelamin' => 'required',
            'idmapel' => 'required|unique:guru_mapel,idmapel,' . $guru_mapel->idmapel . ',idmapel',
        ]);

        $insert = $guru_mapel->update($request->all());
        if ($insert) {
            return redirect()->route("guru_mapel.index")->with("success", "Data Guru Mata Pelajaran $request->nama berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data guru mapel!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruMapel $guru_mapel)
    {
        $del = $guru_mapel->delete();
        if ($del) {
            return redirect()->route("guru_mapel.index")->with("success", "Data guru mapel berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data guru mapel!');
        }
    }
}
