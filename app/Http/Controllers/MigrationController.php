<?php

namespace App\Http\Controllers;

use App\Models\Migration;
use Illuminate\Http\Request;

class MigrationController
{
        public function index()
    {
        $data = Migration::all();
        return view('migration.index', compact('data'));
    }
}
