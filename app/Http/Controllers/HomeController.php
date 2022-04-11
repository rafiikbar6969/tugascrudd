<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('ujian.home');
    }

    public function tentang()
    {
        return view('porfolio');
    }
}

