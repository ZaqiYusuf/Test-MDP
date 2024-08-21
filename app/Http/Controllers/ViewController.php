<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }
    public function create()
    {
        return view('landing.buku.create');
    }
}
