<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function get_tahun_ajaran()
    {
        $sistem = DB::table('sistem')->first();
        $tahun_ajaran = DB::table('sistem')->join('tahun_ajaran', 'sistem.id_ta', '=', 'tahun_ajaran.id_ta')->select('sistem.semester', 'tahun_ajaran.*')->where('sistem.id_ta', '=', $sistem->id_ta)->first();

        $tahun_ajaran->tahun_ajaran = $tahun_ajaran->ta_awal . "/" . ($tahun_ajaran->ta_akhir);
        return $tahun_ajaran;
    }

    public function get_sistem()
    {
        $sistem = DB::table('sistem')->join('tahun_ajaran', 'sistem.id_ta', '=', 'tahun_ajaran.id_ta')->first();
        $sistem->tahun_ajaran = $sistem->ta_awal . "/" . ($sistem->ta_akhir);
        return $sistem;
    }

    public function status_ta($ta)
    {
        if ($ta == 1) {
            return "Tahun Ajaran Baru";
        } else {
            return "Tahun Ajaran Lama";
        }
    }


    public function hide_kelas_bawah($kelas)
    {
        if (in_array($kelas, [
            '1A', '1B', '1C', '1D', '1E', '1F', '1G', '1H', '1I', '1J', '1K', '1L', '1M', '1N', '1O', '1P', '1Q', '1R', '1S', '1T', '1U', '1V', '1W', '1X', '1Y', '1Z',
            '2A', '2B', '2C', '2D', '2E', '2F', '2G', '2H', '2I', '2J', '2K', '2L', '2M', '2N', '2O', '2P', '2Q', '2R', '2S', '2T', '2U', '2V', '2W', '2X', '2Y', '2Z',
        ]));
    }
}
