<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Raport;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role == 2) {
            $walas = Walas::where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = Kelas::where('idwali_kelas', '=', $walas->idwali_kelas)->first();
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')
                ->where('kelas.idkelas', '=', $kelas->idkelas)
                ->get();
        } else {
            $siswa = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')
                ->get();
            $kelas = null;
        }

        return view('admin.siswa.index', [
            'title' => "Data Siswa | STAMBUK",
            'record' => $siswa,
            'kelas' => $kelas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role == 2) {
            $walas = Walas::where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = Kelas::where('idwali_kelas', '=', $walas->idwali_kelas)->first();
        } else {
            $kelas = Kelas::all();
        }
        return view('admin.siswa.create', [
            'title' => "Tambah Siswa | STAMBUK",
            'kelas' => $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $ta = $this->get_tahun_ajaran();

        $request->validate([
            "idkelas" => "required",
            "nama_siswa" => "required",
            "no_induk" => "required|unique:siswa,no_induk",
            "nis" => "required|unique:siswa,nis",
            "tempat_lahir" => "required",
            "tgl_lahir" => "required",
            "jenis_kelamin" => "required",
            "agama" => "required",
            "anak_ke" => "required",
            "alamat_siswa" => "required",
            "nama_ayah" => "required",
            "nama_ibu" => "required",
            "pekerjaan_ayah" => "required",
            "pekerjaan_ibu" => "required",
            "jalan" => "required",
            "kelurahan_desa" => "required",
            "kecamatan_kota" => "required",
            "kabupaten_kota" => "required",
            "provinsi" => "required",
        ]);

        $siswa = [
            'idsiswa' => null,
            'idkelas' => $request->idkelas,
            'nama_siswa' => $request->nama_siswa,
            'no_induk' => $request->no_induk,
            'nis' => $request->nis,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'alamat_siswa' => $request->alamat_siswa,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'jalan' => $request->jalan,
            'kelurahan_desa' => $request->kelurahan_desa,
            'kecamatan_kota' => $request->kecamatan_kota,
            'kabupaten_kota' => $request->kabupaten_kota,
            'provinsi' => $request->provinsi,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        DB::beginTransaction();

        try {
            $idsiswa = DB::table('siswa')->insertGetId($siswa);

            $idtranskrip = DB::table('transkrip')->insertGetId([
                'id_transkrip' => null,
                'id_ta' => $ta->id_ta,
                'idsiswa' => $idsiswa,
                'status' => 1,
            ]);

            //add akun siswa otomatis
            User::Create([
                'name' => $request->nama_siswa,
                'email' => $request->nis . '@stambuk.com',
                'password' => bcrypt($request->nis),
                'role' => 0,
                'id_join' => $idsiswa,
            ]);

            //add blank raport
            DB::table('raport')->insert([
                'id_transkrip' => $idtranskrip,
            ]);

            DB::commit();

            return redirect()->route("siswa.index")->with("success", "Data siswa $request->nama_siswa berhasil ditambahkan!");
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withErrors('Gagal membuat data siswa!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Siswa $siswa)
    {
        $aksi = $request->aksi ?? "";
        $ta = $this->get_tahun_ajaran();

        if ($aksi == "profile") {
            $record = $siswa;
            return view('admin.siswa.view_b', compact('record'));
            #
        } elseif ($aksi == "raport") {

            // $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->join('raport', 'raport.idsiswa', '=', 'siswa.idsiswa')->where('siswa.idsiswa', '=', $siswa->idsiswa)->first();
            // $raport = DB::table('raport')->where('idsiswa', $siswa->idsiswa)->first();
            // $kelas = Kelas::all();
            // $nilai_u = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'utama')->where('idsiswa', '=', $siswa->idsiswa)->get();
            // $nilai_m = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'mulok')->where('idsiswa', '=', $siswa->idsiswa)->get();

            // dd($siswa);
            $get_transkrip = DB::table('transkrip')
                ->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')
                ->where('siswa.idsiswa', $siswa->idsiswa)
                ->where('id_ta', $ta->id_ta)
                ->where('transkrip.semester', $ta->semester)->first();

            // dd($get_transkrip);
            $record = DB::table('transkrip')
                ->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')
                ->join('raport', 'transkrip.id_transkrip', '=', 'raport.id_transkrip')
                ->join('tahun_ajaran', 'transkrip.id_ta', '=', 'tahun_ajaran.id_ta')
                ->where('transkrip.id_transkrip', '=', $get_transkrip->id_transkrip)
                ->first();

            // dd($record);
            $raport = $get_transkrip;
            $kelas = Kelas::all();


            $nilai_u = DB::table('transkrip')
                ->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')
                ->join('nilai', 'transkrip.id_transkrip', '=', 'nilai.id_transkrip')
                ->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')
                ->where('mapel.type', '=', 'utama')
                ->where('transkrip.id_transkrip', '=', $get_transkrip->id_transkrip)
                ->where('transkrip.idsiswa', '=', $siswa->idsiswa)->get();

            $nilai_m =
                DB::table('transkrip')
                ->join('siswa', 'transkrip.idsiswa', '=', 'siswa.idsiswa')
                ->join('nilai', 'transkrip.id_transkrip', '=', 'nilai.id_transkrip')
                ->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')
                ->where('mapel.type', '=', 'mulok')
                ->where('transkrip.id_transkrip', '=', $get_transkrip->id_transkrip)
                ->where('transkrip.idsiswa', '=', $siswa->idsiswa)->get();

            // dd([
            //     'record' => $record,
            //     'raport' => $raport,
            //     'kelas' => $kelas,
            //     'nilai_u' => $nilai_u,
            //     'nilai_m' => $nilai_m,
            // ]);
            return view('admin.siswa.view_r', compact('record', 'kelas', 'raport', 'nilai_m', 'nilai_u'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        if (auth()->user()->role == 2) {
            $walas = Walas::where('idwali_kelas', '=', auth()->user()->id_join)->first();
            $kelas = Kelas::where('idwali_kelas', '=', $walas->idwali_kelas)->get();
        } else {
            $kelas = Kelas::all();
        }
        $record = $siswa;
        return view('admin.siswa.edit', compact('record', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            "idkelas" => "required",
            "nama_siswa" => "required",
            "no_induk" => "required",
            "nis" => "required",
            "tempat_lahir" => "required",
            "tgl_lahir" => "required",
            "jenis_kelamin" => "required",
            "agama" => "required",
            "anak_ke" => "required",
            "alamat_siswa" => "required",
            "nama_ayah" => "required",
            "nama_ibu" => "required",
            "pekerjaan_ayah" => "required",
            "pekerjaan_ibu" => "required",
            "jalan" => "required",
            "kelurahan_desa" => "required",
            "kecamatan_kota" => "required",
            "kabupaten_kota" => "required",
            "provinsi" => "required",
        ]);
        $insert = $siswa->update($request->all());
        if ($insert) {
            return redirect()->route("siswa.index")->with("success", "Data siswa $request->nama_siswa berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data siswa!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $del = $siswa->delete();
        if ($del) {
            return redirect()->route("siswa.index")->with("success", "Data siswa berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data siswa!');
        }
    }
    public function print(Request $request, $id)
    {

        $siswa = Siswa::where('idsiswa', '=', $id)->first();
        $aksi = $request->aksi ?? "";
        if ($aksi == "profile") {
            $record = $siswa;
            return view('admin.siswa.print_b', compact('record'));
            #
        } elseif ($aksi == "raport") {
            $record = DB::table('siswa')->join('kelas', 'siswa.idkelas', '=', 'kelas.idkelas')->join('raport', 'raport.idsiswa', '=', 'siswa.idsiswa')->where('siswa.idsiswa', '=', $siswa->idsiswa)->first();
            $raport = DB::table('raport')->where('idsiswa', $siswa->idsiswa)->first();
            $kelas = Kelas::all();
            $nilai_u = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'utama')->where('idsiswa', '=', $siswa->idsiswa)->get();
            $nilai_m = DB::table('nilai')->join('mapel', 'nilai.id_mapel', '=', 'mapel.idmapel')->where('type', '=', 'mulok')->where('idsiswa', '=', $siswa->idsiswa)->get();
            return view('admin.siswa.print_r', compact('record', 'kelas', 'raport', 'nilai_m', 'nilai_u'));
        }
    }
}
