<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiMaster;
use Illuminate\Http\Request;

class TabelAkuntansiMasterController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiMaster::paginate(10);
        return view('tabelakuntansimaster.index', compact('data'));
    }
}