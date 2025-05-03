<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiHistoryTutupBuku;
use Illuminate\Http\Request;

class TabelAkuntansiHistoryTutupBukuController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiHistoryTutupBuku::paginate(10);
        return view('tabelakuntansihistorytutupbuku.index', compact('data'));
    }
}