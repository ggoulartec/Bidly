<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerencialController extends Controller
{
    public function leiloeiro()
    {
        return view('gerencial.leiloeiro.index');
    }

    public function localidade()
    {
        return view('gerencial.localidade.index');
    }

    public function comitente()
    {
        return view('gerencial.comitente.index');
    }

    public function status()
    {
        return view('gerencial.status.index');
    }
}
