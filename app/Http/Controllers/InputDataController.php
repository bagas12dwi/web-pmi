<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputDataController extends Controller
{
    public function index()
    {
        return view('admin.input-data');
    }
}
