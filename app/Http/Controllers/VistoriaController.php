<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistoriaController extends Controller
{
    public function categoria()
    {
        return view('vistoria.categoria.index');
    }

    public function veiculo()
    {
        return view('vistoria.veiculo.index');
    }

    public function equipamento()
    {
        return view('vistoria.equipamento.index');
    }

    public function imovel()
    {
        return view('vistoria.imovel.index');
    }
}
