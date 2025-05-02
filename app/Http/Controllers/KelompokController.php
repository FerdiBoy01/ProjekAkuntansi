<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class KelompokController
{
    public function index()
    {
        $data = Kelompok::all();
        return view('kelompok.index', compact('data'));
    }
}

