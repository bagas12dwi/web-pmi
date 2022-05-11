<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class InputDataController extends Controller
{
    public function index()
    {
        return view('admin.input-data', [
            'title' => 'Input Data',
            'participants' => Participants::all()
        ]);
    }
}
