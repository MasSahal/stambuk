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
        $ta = $this->get_tahun_ajaran();
        // dd($ta);
        $siswa = DB::table('transkrip')->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')->where('transkrip.id_ta', '=', $ta->id_ta)->where('transkrip.semester', '=', $ta->semester)->get();

        // dd($siswa);
        // if (auth()->user()->role == 2) {
        //     $user = DB::table('kelas')->where('idwali_kelas', '=', auth()->user()->id_join)->first();
        //     $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('kelas.idkelas', '=', $user->idkelas)->get();
        //     // $siswa = DB::table('siswa')->select('transkrip.id_transkrip', 'transkrip.id_ta', 'transkrip.kelas', 'siswa.*')->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('transkrip.id_ta', '=', $ta->id_ta)->where('kelas.idkelas', '=', $user->idkelas)->get();
        // } else {
        //     $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->get();
        //     // $siswa = DB::table('siswa')->select('transkrip.id_transkrip', 'transkrip.id_ta', 'transkrip.kelas', 'siswa.*')->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('transkrip.id_ta', '=', $ta->id_ta)->get();
        // }

        foreach ($siswa as $i => $s) {
            $cek_nilai = DB::table('nilai')->where('id_transkrip', '=', $s->id_transkrip)->get();
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

        $ta = $this->get_tahun_ajaran();
        $id = $request->get('id_transkrip') ?? 0;
        // $id_transkrip = $request->get('id_transkrip') ?? 0;

        if ($id == 0) {
            return redirect()->route('nilai.index')->with('error', 'Data siswa tidak ditemukan!');
        }

        $siswa = DB::table('transkrip')->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')->leftJoin('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('transkrip.id_transkrip', '=', $id)->first();
        $mapel = DB::table('mapel')
            ->leftJoin('guru_mapel', 'mapel.idmapel', '=', 'guru_mapel.idmapel')
            ->whereNull('guru_mapel.idmapel')
            ->select('mapel.*')
            ->get();

        return view('admin.nilai.create', [
            'title' => "Tambah Siswa | STAMBUK",
            'mapel' => $mapel,
            'siswa' => $siswa,
            'ta' => $this->get_tahun_ajaran(),
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
                'id_transkrip'  => $request->id_transkrip[$i],
                'id_mapel'      => $request->id_mapel[$i],
                'p_nilai'       => $request->p_nilai[$i],
                'p_predikat'    => $predikat_p,
                'p_deskripsi'   => $this->deskripsi($request->p_nilai[$i], $request->id_mapel[$i], $request->idsiswa[$i]),
                'k_nilai'       => $request->k_nilai[$i],
                'k_predikat'    => $predikat_k,
                'k_deskripsi'   => $this->deskripsi($request->k_nilai[$i], $request->id_mapel[$i], $request->idsiswa[$i]),
            ];
            $insert = Nilai::Create($data);
        }

        //update kelas di transkrip
        DB::table('transkrip')->where('id_transkrip', '=', $request->id_transkrip[0])->update(['kelas' => $request->kelas]);

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
        $transkrip = DB::table('transkrip')->where('id_transkrip', '=', $id)->first();
        $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('siswa.idsiswa', '=', $transkrip->idsiswa)->first();
        $nilai = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('nilai.id_transkrip', '=', $transkrip->id_transkrip)->get();
        return view('admin.nilai.view', compact('record', 'nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $record = DB::table('transkrip')->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')->leftJoin('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->where('transkrip.idsiswa', '=', $id)->where('siswa.idsiswa', '=', $id)->first();
        $nilai = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('nilai.idsiswa', '=', $id)->get();
        $ta = $this->get_tahun_ajaran();
        return view('admin.nilai.edit', compact('record', 'nilai', 'ta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $res = true;
        $request->validate([
            'p_nilai' => 'required',
            'k_nilai' => 'required',
        ]);

        for ($i = 0; $i < count($request->id_mapel); $i++) {
            $predikat_p = $this->predikat($request->p_nilai[$i]);
            $predikat_k = $this->predikat($request->k_nilai[$i]);
            $data = [
                'p_nilai'       => $request->p_nilai[$i],
                'p_predikat'    => $predikat_p,
                'p_deskripsi'   => $this->deskripsi($request->p_nilai[$i], $request->id_mapel[$i], $request->idsiswa[$i]),
                'k_nilai'       => $request->k_nilai[$i],
                'k_predikat'    => $predikat_k,
                'k_deskripsi'   => $this->deskripsi($request->k_nilai[$i], $request->id_mapel[$i], $request->idsiswa[$i]),
            ];
            $update = DB::table('nilai')->where('idsiswa', '=', $request->idsiswa[$i])->where('id_mapel', '=', $request->id_mapel[$i])->update($data);

            if ($update == 0) {
                $res = false;
            }
        }
        return redirect()->route("nilai.show", $id)->with("success", "Data Nilai berhasil diperbarui!");
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
        $pred = DB::table('sistem')->first();
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

    public function deskripssi($data, $idmapel)
    {
        $pred = DB::table('sistem')->first();
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

    public function deskripsi($data, $idmapel, $id_siswa)
    {
        $pred = DB::table('sistem')->first();
        if ($data >= $pred->pred_a) {
            $desk = "sangat baik dalam";
        } elseif ($data >= $pred->pred_b) {
            $desk = "baik dalam";
        } elseif ($data >= $pred->pred_c) {
            $desk = "cukup dalam";
        } elseif ($data >= $pred->pred_d) {
            $desk = "kurang dalam ";
        } else {
            $desk = "sangat kurang dalam";
        }

        $siswa = DB::table('siswa')->where('idsiswa', '=', $id_siswa)->first();
        $k_nilai = DB::table('kriteria_nilai')->where('idmapel', '=', $idmapel)->get();

        $kalimat = "";
        if (!is_null($k_nilai)) {
            foreach ($k_nilai as $key => $value) {
                $k1 = str_replace("{predikat}", $desk, $value->kriteria);
                $kalimat .= str_replace("{nama}", $siswa->nama_siswa, $k1) . ". ";
            }
        } else {
            $kalimat .= $desk . " belajar.";
        }

        return $kalimat;
    }
}
