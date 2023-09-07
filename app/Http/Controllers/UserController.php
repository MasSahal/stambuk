<?php

namespace App\Http\Controllers;

use App\Models\GuruMapel;
use App\Models\User;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pengguna.index', ['record' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $type = $request->type ?? 1;
        $arr_used = DB::table('users')
            ->where('role', $type)
            ->pluck('id_join')
            ->toArray();

        if ($type == 2) {
            $record = DB::table('wali_kelas')
                ->whereNotIn('idwali_kelas', $arr_used)
                ->get();
            $title = "Tambah Akun Wali Kelas";
            #
        } elseif ($type == 3) {
            $record = DB::table('guru_mapel')
                ->whereNotIn('id_gurumapel', $arr_used)
                ->get();

            $title = "Tambah Akun Guru Mata Pelajaran";
        } else {
            $record = [];
            $title = "Tambah Akun Admin";
        }
        return view('admin.pengguna.create', ['record' => $record, 'title' => $title, 'type' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($request->role == 2) {
            $walas = Walas::findOrFail($request->id_join);
            $nama = $walas->nama;
        } elseif ($request->role == 3) {
            $guru_mapel = GuruMapel::findOrFail($request->id_join);
            $nama = $guru_mapel->nama_guru;
        } else {
            $request->validate([
                'name' => 'required',
            ]);
            $nama = $request->name;
        }

        $data = [
            'name' => $nama,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'id_join' => $request->id_join ?? 0
        ];

        $insert = User::Create($data);
        if ($insert) {
            return redirect()->route("pengguna.index")->with("success", "Data Pengguna $request->nama berhasil ditambahkan!");
        } else {
            return back()->withErrors('Gagal membuat data Pengguna!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        #
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $record = User::findOrFail($id);
        $type = $request->type ?? 1;
        if ($type == 2) {
            $title = "Edit Wali Kelas";
        } elseif ($type == 3) {
            $title = "Edit Guru Mapel";
        } else {
            $title = "Edit Admin";
        }
        return view('admin.pengguna.edit', ['title' => $title, 'record' => $record]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;

        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $update = DB::table('users')->where('id', $id)->update($data);
        if ($update) {
            return redirect()->route("pengguna.index")->with("success", "Data Pengguna $request->name berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data Pengguna!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del = User::destroy($id);
        if ($del) {
            return redirect()->route("pengguna.index")->with("success", "Data pengguna berhasil dihapus!");
        } else {
            return back()->with("errors", 'Gagal menghapus data pengguna!');
        }
    }

    public function edit_profile()
    {
        $record = User::findOrFail(auth()->user()->id);
        return view('admin.edit_profile', ['record' => $record, 'title' => "Edit Profile"]);
    }

    public function simpan_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        // upload foto
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/profile');
            $image->move($destinationPath, $name);
            $data['foto'] = $name;
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;

        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }

        // dd($data);

        $update = DB::table('users')->where('id', auth()->user()->id)->update($data);
        if ($update) {
            return redirect()->route("dashboard")->with("success", "Data Profile $request->name berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data Profile!');
        }
    }
}
