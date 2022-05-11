<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function home()
    {
        return view('informacoes.home');
    }
}
