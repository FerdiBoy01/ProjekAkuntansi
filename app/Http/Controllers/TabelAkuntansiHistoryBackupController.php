<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiHistoryBackup;
use Illuminate\Http\Request;

class TabelAkuntansiHistoryBackupController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiHistoryBackup::paginate(10);
        return view('tabelakuntansihistorybackup.index', compact('data'));
    }
}