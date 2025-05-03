<?php

namespace App\Http\Controllers;

use App\Models\TPerkiraan;
use Illuminate\Http\Request;

class TPerkiraanController extends Controller
{
    public function index()
    {
        $data = TPerkiraan::paginate(10);
        return view('tperkiraan.index', compact('data'));
    }
}