<?php

namespace App\Http\Controllers;

use App\Models\K_Nilai;
use App\Models\Mapel;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class K_NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $records = K_Nilai::all();

        return view('admin.k_nilai.index', ['mapel' => Mapel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.k_nilai.create', ['mapel' => Mapel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'idmapel'  => 'required',
            'kriteria'  => 'required',
        ]);
        // dd($request->all());

        $insert = K_Nilai::Create($request->all());
        if ($insert) {
            return redirect()->route("k_nilai.index")->with("success", "Data kriteria $request->namkriteria berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data kriteria!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $record = K_Nilai::where('idkriteria', '=', $id)->first();
        $kriteria_nilai = K_Nilai::all();
        $mapel = Mapel::all();
        return view('admin.k_nilai.edit', compact('record', 'mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(K_Nilai $nilai)
    {
        dd($nilai);
        $record = $kriteria_nilai;
        $kriteria_nilai = K_Nilai::all();
        return view('admin.k_nilai.edit', compact('record', 'k_nilai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kriteria_nilai = K_Nilai::where('idkriteria', '=', $id)->first();
        $request->validate([
            'idmapel'  => 'required',
            'kriteria'  => 'required',
        ]);

        $data = [
            'idmapel'  => $request->idmapel,
            'kriteria'  => $request->kriteria,
        ];

        $update = DB::table('kriteria_nilai')->where('idkriteria', '=', $id)->update($data);
        if ($update) {
            return redirect()->route("k_nilai.index")->with("success", "Data Kriteria $request->nkriteria berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data kriteria!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(K_Nilai $kriteria_nilai)
    {
        #
    }

    public function delete_k_nilai($id)
    {
        $del = K_Nilai::destroy($id);
        if ($del) {
            return redirect()->route("k_nilai.index")->with("success", "Data kriteria berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data kriteria!');
        }
    }
}
