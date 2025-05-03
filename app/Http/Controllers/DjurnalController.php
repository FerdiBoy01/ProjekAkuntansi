<?php

namespace App\Http\Controllers;

use App\Models\Djurnal;
use Illuminate\Http\Request;

class DjurnalController extends Controller
{
    public function index()
    {
        $data = Djurnal::paginate(10);
        return view('djurnal.index', compact('data'));
    }
}