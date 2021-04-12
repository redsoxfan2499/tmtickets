<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpactController extends Controller
{
    public function index()
    {
        return view('impacts.index');
    }

    public function create()
    {
        return view('impacts.create');
    }
     public function edit($id)
    {
        return view('impacts.edit', compact('id'));
    }
}
