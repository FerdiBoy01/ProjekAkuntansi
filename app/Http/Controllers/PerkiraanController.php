<?php

namespace App\Http\Controllers;

use App\Models\Perkiraan;
use Illuminate\Http\Request;

class PerkiraanController extends Controller
{
    public function index()
    {
        $data = Perkiraan::paginate(10);
        return view('perkiraan.index', compact('data'));
    }
}