<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportingController extends Controller
{
    //
    public function index()
    {
        return view('admin.reporting', [
            'title' => "Reporting"
        ]);
    }
}
