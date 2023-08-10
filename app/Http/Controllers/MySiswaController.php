<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySiswaController extends Controller
{
    public function index()
    {
        return view('mysiswa.index');
    }
}
