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

     // Menyimpan data baru dari form
     public function store(Request $request)
     {
         $request->validate([
             'NomorPerkiraan' => 'required',
             'NamaPerkiraan' => 'required',
             'Kelompok' => 'required',
             'Keterangan' => 'nullable',
         ]);
 
         
         TPerkiraan::create([
             'NomorPerkiraan' => $request->NomorPerkiraan,
             'NamaPerkiraan' => $request->NamaPerkiraan,
             'Kelompok' => $request->Kelompok,
             'Keterangan' => $request->Keterangan,
         ]);
 
         return redirect()->route('tperkiraan.index')->with('success', 'Data berhasil ditambahkan!');
     }

     public function create()
    {
        return view('tperkiraan.create');
    }


}