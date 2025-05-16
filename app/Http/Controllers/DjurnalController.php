<?php

namespace App\Http\Controllers;

use App\Models\Djurnal;
use Illuminate\Http\Request;


class DjurnalController extends Controller
{
    public function index()
    {
        $data = Djurnal::paginate(10);  // Mendapatkan data dengan pagination
        return view('djurnal.index', compact('data'));  // Pastikan mengirim 'data' ke view
    }

    public function create()
{
    return view('djurnal.create');
}

public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        // Tambahkan field sesuai dengan struktur tabel djurnal
    ]);

    Djurnal::create($request->all());

    return redirect()->route('djurnal.index')->with('success', 'Data berhasil ditambahkan!');
}

}