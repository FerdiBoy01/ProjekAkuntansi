<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiTransaksi;
use Illuminate\Http\Request;

class TabelAkuntansiTransaksiController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiTransaksi::paginate(10);
        return view('tabelakuntansitransaksi.index', compact('data'));
    }
}