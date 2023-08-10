<?php

namespace App\Http\Controllers;

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
        if ($type == 2) {
            $walas = Walas::all();
            $title = "Tambah Wali Kelas";
        } else {
            $walas = false;
            $title = "Tambah Admin";
        }
        return view('admin.pengguna.create', ['record' => $walas, 'title' => $title]);
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
            $walas = Walas::all();
            $title = "Tambah Wali Kelas";
        } else {
            $walas = false;
            $title = "Tambah Admin";
        }
        return view('admin.pengguna.edit', ['walas' => $walas, 'title' => $title, 'record' => $record]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'role' => 'required',
        ]);

        if ($request->role == 2) {
            $walas = Walas::findOrFail($request->id_join);
            $data['name'] = $walas->nama;
            $data['id_join'] = $walas->idwali_kelas;
        } else {
            $request->validate([
                'name' => 'required',
            ]);
            $data['name'] = $request->name;
        }

        $data['email'] = $request->email;

        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $update = DB::table('users')->where('id', $id)->update($data);
        if ($update) {
            return redirect()->route("pengguna.index")->with("success", "Data Pengguna $request->nama berhasil diperbarui!");
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
}
