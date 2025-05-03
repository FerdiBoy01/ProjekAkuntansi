<?php

namespace App\Http\Controllers;

use App\Models\Migration;
use Illuminate\Http\Request;

class MigrationController extends Controller
{
    public function index()
    {
        $data = Migration::paginate(10);
        return view('migration.index', compact('data'));
    }
}