<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $record = DB::table('kelas')
            ->join('wali_kelas', 'kelas.idwali_kelas', '=', 'wali_kelas.idwali_kelas')
            ->select('kelas.*', 'wali_kelas.nama')
            ->get();

        // dd($record);
        return view('admin.kelas.index', compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kelas.create', ['walas' => Walas::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'idwali_kelas'  => 'required',
            'nama_kelas'    => 'required|max:2|unique:kelas,nama_kelas',
        ]);

        $insert = Kelas::Create($request->all());
        if ($insert) {
            return redirect()->route("kelas.index")->with("success", "Data Kelas $request->nama_kelas berhasil ditambahkan!");
        } else {
            return back()->withErrors('Gagal membuat data kelas!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kela)
    {
        $record = $kela;
        $walas = Walas::all();
        return view('admin.kelas.edit', compact('record', 'walas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            'idwali_kelas'  => 'required',
            'nama_kelas'    => 'required|max:2',
        ]);

        $update = $kela->update($request->all());
        if ($update) {
            return redirect()->route("kelas.index")->with("success", "Data Kelas $request->nama_kelas berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data kelas!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del = Kelas::destroy($id);
        if ($del) {
            return redirect()->route("kelas.index")->with("success", "Data Kelas berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data kelas!');
        }
    }
}
