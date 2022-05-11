<?php

namespace App\Http\Controllers;

use App\Models\Empresa_cliente;
use Illuminate\Http\Request;
use App\Models\Orcamento;
use App\Models\Empresa;
use App\Models\Produto;
use Symfony\Component\Console\Input\Input;



class InformacoesController extends Controller
{
    public function index()
    {
        return view('/informacoes.home');
    }




}
