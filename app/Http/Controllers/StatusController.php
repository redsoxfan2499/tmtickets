<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('statuses.index');
    }

    public function create()
    {
        return view('statuses.create');
    }

    public function edit()
    {
        return view('statuses.edit');
    }
}
