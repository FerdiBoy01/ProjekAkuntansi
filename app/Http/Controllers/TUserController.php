<?php

namespace App\Http\Controllers;

use App\Models\TUser;
use Illuminate\Http\Request;

class TUserController extends Controller
{
    public function index()
    {
        $data = TUser::paginate(10);
        return view('users.index', compact('data'));
    }
}