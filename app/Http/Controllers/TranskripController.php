<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranskripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahun_ajaran_sekaran = $this->get_tahun_ajaran();
        $record = DB::table('transkrip')
            ->select('transkrip.id_ta', 'transkrip.status', 'transkrip.kelas', 'siswa.*')
            ->join('siswa', 'siswa.idsiswa', '=', 'transkrip.idsiswa')
            ->where('id_ta', '=', $tahun_ajaran_sekaran->id_ta)
            ->where('status', '=', 1)->get();

        return view('admin.transkrip.index', [
            'title' => "Transkrip | STAMBUK",
            'record' => $record,
            'tahun_ajaran' => DB::table('tahun_ajaran')->first(),
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
