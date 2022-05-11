<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Create;
use App\Models\Empresa_clientes;
use \PDF;

class PdfController extends Controller {
    public function geraPdf() {

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('/orcamento/modelos/modelo3', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }
    }
