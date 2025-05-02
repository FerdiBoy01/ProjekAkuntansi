<?php

namespace App\Http\Controllers;

use App\Models\Hjurnal;
use Illuminate\Http\Request;

class HjurnalController
{
    public function index()
{
    $data = Hjurnal::paginate(10);
    return view('hjurnal.index', compact('data')); 

}
}
