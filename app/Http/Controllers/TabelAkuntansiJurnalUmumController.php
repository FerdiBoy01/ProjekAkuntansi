<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiJurnalUmum;
use Illuminate\Http\Request;

class TabelAkuntansiJurnalUmumController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiJurnalUmum::paginate(10);
        return view('tabelakuntansijurnalumum.index', compact('data'));
    }
}