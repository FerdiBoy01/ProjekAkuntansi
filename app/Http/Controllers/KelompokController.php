<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index()
    {
        $data = Kelompok::paginate(10);
        return view('kelompok.index', compact('data'));
    }
}