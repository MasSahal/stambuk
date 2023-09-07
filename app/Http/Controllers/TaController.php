<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tahun_ajaran.index', [
            'title' => 'Tambah Tahun Ajaran',
            'record' => DB::table('tahun_ajaran')->get(),
        ]);
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
        $request->validate([
            'ta_awal' => 'required',
            'ta_akhir' => 'required',
        ]);

        $tahun_ajar = $request->ta_awal . '/' . $request->ta_akhir;

        // $seleksi data
        if (DB::table('tahun_ajaran')->where('ta_awal', $request->ta_awal)->where('ta_akhir', $request->ta_akhir)->count() > 0) {
            return redirect()->route('ta.index')->with('error', "Data Tahun Ajaran $tahun_ajar sudah ada");
        }

        if ($request->ta_awal > $request->ta_akhir) {
            return redirect()->route('ta.index')->with('error', "Tahun awal tidak boleh lebih besar dari tahun akhir");
        }

        if ($request->ta_awal == $request->ta_akhir) {
            return redirect()->route('ta.index')->with('error', "Tahun awal tidak boleh sama dengan tahun akhir");
        }

        if ($request->ta_akhir - $request->ta_awal > 1) {
            return redirect()->route('ta.index')->with('error', "Tahun awal tidak boleh lebih dari 1 tahun dari tahun akhir");
        }

        DB::beginTransaction();

        try {
            DB::table('tahun_ajaran')->update([
                'status' => 0,
            ]);

            DB::table('tahun_ajaran')->insert([
                'ta_awal' => $request->ta_awal,
                'ta_akhir' => $request->ta_akhir,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);



            DB::commit();
            // all good
            return redirect()->route('ta.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            return redirect()->route('ta.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus data
        $del = DB::table('tahun_ajaran')->where('id_ta', $id)->delete();
        if ($del) {
            return redirect()->route('ta.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('ta.index')->with('error', 'Data gagal dihapus');
        }
    }
}
