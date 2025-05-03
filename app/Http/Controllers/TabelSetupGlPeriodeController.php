<?php

namespace App\Http\Controllers;

use App\Models\TabelSetupGlPeriode;
use Illuminate\Http\Request;

class TabelSetupGlPeriodeController extends Controller
{
    public function index()
    {
        $data = TabelSetupGlPeriode::paginate(10);
        return view('tabelsetupglperiode.index', compact('data'));
    }
}