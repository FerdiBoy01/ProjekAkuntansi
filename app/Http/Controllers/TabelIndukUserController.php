<?php

namespace App\Http\Controllers;

use App\Models\TabelIndukUser;
use Illuminate\Http\Request;

class TabelIndukUserController extends Controller
{
    public function index()
    {
        $data = TabelIndukUser::paginate(10);
        return view('tabelindukuser.index', compact('data'));
    }
}