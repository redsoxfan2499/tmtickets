<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

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

    public function edit($id)
    {
        return view('statuses.edit', compact('id'));
    }
}
