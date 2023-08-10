<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role == 2) {
            $user = DB::table('kelas')->where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('kelas.idkelas', '=', $user->idkelas)->get();
        } else {
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->get();
        }

        foreach ($siswa as $i => $s) {
            $cek_nilai = DB::table('nilai')->where('idsiswa', '=', $s->idsiswa)->get();
            if (count($cek_nilai) > 0) {
                $siswa[$i]->input_nilai = true;
            } else {
                $siswa[$i]->input_nilai = false;
            }
        }
        return view('admin.nilai.index', [
            'title' => "Data Siswa | STAMBUK",
            'record' => $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $id = $request->get('id') ?? 0;
        // $idmapel = $request->get('idmapel') ?? 0;
        // $siswa = DB::table('siswa')->where('idsiswa', '=', $id)->first();
        // return view('admin.nilai.create', [
        //     'title' => "Tambah Siswa | STAMBUK",
        //     'nilai' => Nilai::all(),
        //     'siswa' => $siswa,
        //     'idmapel' => $idmapel
        // ]);
        $id = $request->get('idsiswa') ?? 0;
        $siswa = DB::table('siswa')->where('idsiswa', '=', $id)->first();
        $mapel = Mapel::all();

        return view('admin.nilai.create', [
            'title' => "Tambah Siswa | STAMBUK",
            'mapel' => $mapel,
            'siswa' => $siswa,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'p_nilai' => 'required',
            'k_nilai' => 'required',
        ]);
        // $data = [];
        for ($i = 0; $i < count($request->id_mapel); $i++) {
            $predikat_p = $this->predikat($request->p_nilai[$i]);
            $predikat_k = $this->predikat($request->k_nilai[$i]);
            $data = [
                'idsiswa'       => $request->idsiswa[$i],
                'id_mapel'      => $request->id_mapel[$i],
                'p_nilai'       => $request->p_nilai[$i],
                'p_predikat'    => $predikat_p,
                'p_deskripsi'   => $this->deskripsi($request->p_nilai[$i], $request->id_mapel[$i]),
                'k_nilai'       => $request->k_nilai[$i],
                'k_predikat'    => $predikat_k,
                'k_deskripsi'   => $this->deskripsi($request->k_nilai[$i], $request->id_mapel[$i]),
            ];
            $insert = Nilai::Create($data);
        }

        if ($insert) {
            return redirect()->route("nilai.index")->with("success", "Data Nilai $request->nama_mapel berhasil ditambahkan!");
        } else {
            return back()->withErrors('Gagal membuat data Nilai!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('siswa.idsiswa', '=', $id)->first();
        $nilai = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('nilai.idsiswa', '=', $id)->get();
        return view('admin.nilai.view', compact('record', 'nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        return view("admin.nilai.view", ['record' => $nilai]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }

    public function predikat($data)
    {
        $pred = DB::table('predikat')->first();
        if ($data >= $pred->pred_a) {
            $predikat_p = "A";
        } elseif ($data >= $pred->pred_b) {
            $predikat_p = "B";
        } elseif ($data >= $pred->pred_c) {
            $predikat_p = "C";
        } elseif ($data >= $pred->pred_d) {
            $predikat_p = "D";
        } else {
            $predikat_p = "E";
        }

        return $predikat_p;
    }

    public function deskripsi($data, $idmapel)
    {
        $pred = DB::table('predikat')->first();
        if ($data >= $pred->pred_a) {
            $desk = "Sangat Baik dalam ";
        } elseif ($data >= $pred->pred_b) {
            $desk = "Baik dalam ";
        } elseif ($data >= $pred->pred_c) {
            $desk = "Cukup dalam ";
        } elseif ($data >= $pred->pred_d) {
            $desk = "Kurang dalam ";
        } else {
            $desk = "Sangat Kurang dalam ";
        }

        $k_nilai = DB::table('kriteria_nilai')->where('idmapel', '=', $idmapel)->get();
        $list = " : <br><ul>";
        if (count($k_nilai) == 0) {
            $res = $desk . "Belajar";
        } else {
            foreach ($k_nilai as $key => $value) {
                $list .= "<li>" . $value->kriteria . "</li>";
            }
            $list .= "</ul>";
            $res = $desk . $list;
        }
        return $res;
    }
}
