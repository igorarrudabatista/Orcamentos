<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orcamento;
use App\Models\Empresa;
use App\Models\Empresa_Cliente;
use App\Models\Produto;



class HomeController extends Controller
{
  public function home() {

    $empresa = Empresa::all();
    $orcamento = Orcamento::all();
    $empresa_cliente = Empresa_Cliente::all();
    $produtos = Produto::all();

    return view('dashboard.home', [
                'empresa'=> $empresa, 
                'orcamento' => $orcamento,
                'empresa_cliente' => $empresa_cliente,
                'produtos' => $produtos
              ]);

//    return view('dashboard.home');
}
}