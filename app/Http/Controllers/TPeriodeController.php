<?php

namespace App\Http\Controllers;

use App\Models\TPeriode;
use Illuminate\Http\Request;

class TPeriodeController extends Controller
{
    public function index()
    {
        $data = TPeriode::paginate(10);
        return view('tperiode.index', compact('data'));
    }
}