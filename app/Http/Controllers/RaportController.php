<?php

namespace App\Http\Controllers;

use App\Models\Raport;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RaportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit($id)
    {

        $record = Raport::where('idsiswa', '=', $id)->first();
        return view('admin.raport.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "sakit" => "max:2",
            "izin" => "max:2",
            "tanpa_ket" => "max:2",
        ]);

        $record = Raport::where('idsiswa', '=', $id)->first();
        $update = $record->update($request->all());
        if ($update) {
            return redirect()->route("siswa.index")->with("success", "Data berhasil diperbarui!");
        } else {
            return back()->withErrors('Gagal memperbarui data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
