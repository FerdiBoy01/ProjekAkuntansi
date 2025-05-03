<?php

namespace App\Http\Controllers;

use App\Models\TabelSetupGlPerkiraan;
use Illuminate\Http\Request;

class TabelSetupGlPerkiraanController extends Controller
{
    public function index()
    {
        $data = TabelSetupGlPerkiraan::paginate(10);
        return view('tabelsetupglperkiraan.index', compact('data'));
    }
}