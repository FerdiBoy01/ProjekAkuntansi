<?php

namespace App\Http\Controllers;

use App\Models\Djurnal;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');  // Pastikan mengirim 'data' ke view
    }
}