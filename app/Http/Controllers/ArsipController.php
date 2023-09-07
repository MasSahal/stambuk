<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $selected_kelas = $request->get('idkelas') ?? false;
        $db = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas');

        if ($selected_kelas == false) {
            $record = $db->orderBy('nama_kelas', 'asc')->get();
        } else {
            $record = $db->where('kelas.idkelas', '=', $selected_kelas)->orderBy('nama_kelas', 'asc')->get();
        }
        // $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('kelas.idkelas', '=', $selected_kelas)->orderBy('nama_kelas', 'asc')->get();

        // dd($record);
        return view('admin.arsip.index', [
            'title' => "Arsip | STAMBUK",
            'record' => $record,
            'tahun_ajaran' => DB::table('tahun_ajaran')->get(),
            'pilih_kelas' => DB::table('kelas')->orderBy('nama_kelas', 'asc')->get(),
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
        //
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
        //
    }
}
