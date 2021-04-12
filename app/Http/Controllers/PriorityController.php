<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function index()
    {
        return view('priorities.index');
    }

    public function create()
    {
        return view('priorities.create');
    }

    public function edit($id)
    {
        return view('priorities.edit', compact('id'));
    }
}
