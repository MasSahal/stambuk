<?php

namespace App\Http\Controllers;

use App\Models\Walas;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.walas.index', [
            'title' => "Data Wali Kelas | STAMBUK",
            'record' => Walas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.walas.create', [
            'title' => "Tambah Wali Kelas | STAMBUK",
            'wali_kelas' => Walas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|max:20',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'email' => 'required',
        ]);
        // dd($request->all());

        $insert = Walas::Create($request->all());
        if ($insert) {
            return redirect()->route("walas.index")->with("success", "Data Wali Kelas $request->nama berhasil ditambahkan!");
        } else {
            return back()->withErrors('Gagal membuat data Wali Kelas!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Walas $wala)
    {
        $record = $wala;
        $wali_kelas = Walas::all();
        return view('admin.walas.view', compact('record', 'wali_kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Walas $wala)
    {
        $record = $wala;
        $wali_kelas = Walas::all();
        return view('admin.walas.edit', compact('record', 'wali_kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Walas $wala)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'email' => 'required',

        ]);
        // dd($request->all());

        $insert = $wala->update($request->all());
        if ($insert) {
            return redirect()->route("walas.index")->with("success", "Data Wali Kelas $request->nama berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data wali kelas!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Walas $wala)
    {
        $del = $wala->delete();
        if ($del) {
            return redirect()->route("walas.index")->with("success", "Data wali kelas berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data wali kelas!');
        }
    }
}
