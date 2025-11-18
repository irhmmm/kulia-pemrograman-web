<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $belajar = "Belajar Laravel";

        return view('index', compact('belajar'));
    }
}
