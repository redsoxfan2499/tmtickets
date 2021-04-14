<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
