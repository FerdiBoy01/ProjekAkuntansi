<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiJurnalMasuk;
use Illuminate\Http\Request;

class TabelAkuntansiJurnalMasukController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiJurnalMasuk::paginate(10);
        return view('tabelakuntansijurnalmasuk.index', compact('data'));
    }
}