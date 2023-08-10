<?php

namespace App\Http\Controllers;

use App\Models\K_Nilai;
use App\Models\Mapel;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_k_nilai(Request $request)
    {
        $idmapel = $request->idmapel;

        $data = K_Nilai::where('idmapel', $idmapel)->get();
        // dd($data);
        // $data = K_Nilai::where('idmapel', $idmapel)->find();
        // $data = Mapel::findOrFail(1);
        $output = array(
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
            "data" => $data
        );
        return response()->json($data);
    }
}
