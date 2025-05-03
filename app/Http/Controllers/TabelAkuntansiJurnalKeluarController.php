<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiJurnalKeluar;
use Illuminate\Http\Request;

class TabelAkuntansiJurnalKeluarController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiJurnalKeluar::paginate(10);
        return view('tabelakuntansijurnalkeluar.index', compact('data'));
    }
}