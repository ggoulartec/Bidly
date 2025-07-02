<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeilaoController extends Controller
{
    public function index()
    {
        return view('leiloes.index');
    }

    public function create()
    {
        return view('leiloes.create');
    }

    public function agenda()
    {
        return view('leiloes.agenda-leiloes');
    }

    public function acompanhamento()
    {
        return view('leiloes.acompanhamento');
    }
}
