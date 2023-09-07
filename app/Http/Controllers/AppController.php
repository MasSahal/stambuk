<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
        // echo "Halo";
    }

    public function dashboard_admin()
    {
        return view('admin.dashboard');
        // echo "Halo";
    }

    public function login()
    {
        return view('login');
        // echo "Halo";
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd(Auth::attempt($credential));
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login');
    }

    public function input_nilai(Request $request)
    {
        $id = $request->get('id') ?? 0;
        return view('admin.input-nilai', ['id' => $id]);
    }

    public function pengaturan()
    {
        $ta = $this->get_tahun_ajaran();
        $sistem = $this->get_sistem();

        return view('admin.pengaturan', [
            'record' => $sistem,
            'records' => DB::table('tahun_ajaran')->get(),
            'title' => 'Pengaturan Sistem',
            'ta' => $ta,
        ]);
    }

    public function set_tahun_ajaran(Request $request)
    {
        $request->validate([
            'id_ta'  => 'required',
        ]);


        $id = $request->id_ta_selected;

        DB::beginTransaction();

        try {

            //update sistem ke semesetr 1 dan pilihan ta
            DB::table('sistem')->where('id', 1)->update([
                'id_ta' => $request->id_ta,
                'semester' => 1,
            ]);

            // DB::table('transkrip')->where('id_ta', '!=', $id)->update(['status' => 0]);

            DB::commit();
            // all good
            return redirect()->route("pengaturan")->with("success", "Pengaturan berhasil disimpan!");
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            return back()->withErrors('Gagal disimpan!');
        }
    }

    public function genarate_smt2(Request $request)
    {
        $ta = $this->get_tahun_ajaran();

        DB::beginTransaction();

        try {
            //generate semester 2 di taun ajaran yang sama!
            $sistem = $this->get_sistem();

            //set semester di sistem
            DB::table('sistem')->where('id', '=', $sistem->id)->update([
                'semester' => 2,
            ]);

            //pilih a
            $siswa = DB::table('siswa')->get();
            //buat data mentah transkrip kosong
            foreach ($siswa as $s) {
                $kelas = DB::table('kelas')->where('idkelas', $s->idkelas)->first();
                DB::table('transkrip')->insert([
                    'id_ta' => $ta->id_ta,
                    'idsiswa' => $s->idsiswa,
                    'kelas' => $kelas->nama_kelas,
                    'semester' => 2,
                    'status' => 1,
                ]);

                //update status semester 1
                DB::table('transkrip')->where('id_ta', $ta->id_ta)->where('idsiswa', $s->idsiswa)->where('semester', 1)->update(['status' => 0]);
            }

            DB::commit();

            return redirect()->route("pengaturan")->with("success", "Perubahan berhasil disimpan!");
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withErrors('Gagal melakukan perubahan!');
        }
    }
}
