<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KenaikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $selected_kelas = $request->get('idkelas') ?? "";

        //jika guru wali kelas
        if (auth()->user()->role == 2) {
            $walas = Walas::where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = Kelas::where('idwali_kelas', '=', $walas->idwali_kelas)->first();
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('kelas.idkelas', '=', $kelas->idkelas)->get();
        } else {
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('kelas.idkelas', '=', $selected_kelas)->get();
            $kelas = null;
        }

        $pilih_kelas = Kelas::orderby('nama_kelas', 'asc')->get();

        return view('admin.kenaikan.index', [
            'title' => "Data Siswa | STAMBUK",
            'record' => $siswa,
            'kelas' => $kelas,
            'pilih_kelas' => $pilih_kelas,
            'ta' => $this->get_tahun_ajaran()
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
        // dd($request->all());
        $ta = $this->get_tahun_ajaran();


        DB::beginTransaction();

        try {

            $siswa = $request->idsiswa;
            // dd
            for ($i = 0; $i < count($siswa); $i++) {

                if ($request->pilihan[$i] == 1) {
                    //update kelas siswa
                    DB::table('siswa')->where('idsiswa', $siswa[$i])->update([
                        'idkelas' => $request->naik_kelas
                    ]);
                }

                $data_siswa = DB::table('siswa')->where('idsiswa', $siswa[$i])->first();
                $kelas = DB::table('kelas')->where('idkelas', $data_siswa->idkelas)->first();


                //buat data mentah transkrip kosong
                DB::table('transkrip')->insert([
                    'id_ta' => $ta->id_ta,
                    'idsiswa' => $siswa[$i],
                    'kelas' => $kelas->nama_kelas,
                    'semester' => 1,
                    'status' => $request->pilihan[$i],
                ]);

                //update
            }

            DB::commit();

            return redirect()->route("kenaikan.index")->with("success", "Perubahan berhasil disimpan!");
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withErrors('Gagal melakukan perubahan!');
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
        //
    }
}
