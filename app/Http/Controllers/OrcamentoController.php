<?php

namespace App\Http\Controllers;

use App\Models\Empresa_cliente;
use Illuminate\Http\Request;
use App\Models\Orcamento;
use App\Models\Empresa;
use App\Models\Produto;
use Symfony\Component\Console\Input\Input;
use PDF;

class OrcamentoController extends Controller
{
    public function create()
    {

        $empresa_cliente = Empresa_cliente::all();

        $orcamento = Orcamento::all();
        $minha_empresa = Empresa::all();
        $produto = Produto::all();

        // $Produto = [$produto];
        // $Quantidade = [$orcamento];
        // $Preco = [$orcamento];




        return view(
            'orcamento.create_orcamento',
            [
                'empresa_cliente' =>   $empresa_cliente,
                'orcamento'       =>   $orcamento,
                'minha_empresa'   =>   $minha_empresa,
                'produto'         =>   $produto
            ]
        );
    }




    public function store(Request $request)
    {
        toast('Orçamento criado com sucesso!','success');

       // dd($request->all());
       $order = Orcamento::create($request->all());



         $products = $request->input('products', []);
         $quantities = $request->input('quantities', []);
         for ($product=0; $product < count($products); $product++) {
             if ($products[$product] != '') {
                 $order->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
             }
         }
        
       
    
        return redirect('/orcamento/show_orcamento');
    }
    


    public function show()
    {

        $orders = Orcamento::with('produto')->get();

        //$orders = Orcamento::all();

        $empresa_cliente = Empresa_cliente::all();
        $empresa = Empresa::all();
        $produto = Produto::all();

        $search = request('search');

        if ($search) {
            $criar_orcamento = Orcamento::where([['Numero_Orcamento', 'like', '%' . $search . '%']])->get();
        } else {
            $criar_orcamento = Orcamento::all();
        }
        

        return view('orcamento.show_orcamento', [
            'orders'            => $criar_orcamento,
            'search'            => $search,
            'empresa_cliente'   => $empresa_cliente,
            'produto'           => $produto,
            'empresa'           => $empresa
        ]);
    }



    public function edit($id)
    {
        

        $editar_orcamento = Orcamento::findOrFail($id);
        $empresa_cliente = Empresa_cliente::all();
        $empresa = Empresa::all();
        $produto = Produto::all();

        $titulo = "Edita Cliente";


            return view('orcamento.edit', [
                'editar_orcamento' => $editar_orcamento, 
                'empresa_cliente' => $empresa_cliente,
                'empresa' => $empresa,
                'produto' => $produto,
            
            compact('titulo')]);
    }

    public function update(Request $request)
    {
        toast('Orçamento editado com sucesso!','success');


       Orcamento::findOrFail($request->id)->update();

     // Orcamento::findOrFail($request->id) -> update();

        $Orcamento = Orcamento::create($request->all());



         $products = $request->input('products', []);
         $quantities = $request->input('quantities', []);
         for ($product=0; $product < count($products); $product++) {
             if ($products[$product] != '') {
                 $Orcamento->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
             }
         }
        

        return redirect('/orcamento/show_orcamento');
    }

    public function gerar_pdf($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = Empresa::all();

        $produto = Produto::all();





        return view('orcamento.gerar_pdf', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }

    public function modelo1($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = Empresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo1', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }

    
    public function modelo2($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = Empresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo2', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }
    
    public function modelo3($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = Empresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo3', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }
    public function modelo4($id)
    {
        $orcamento = Orcamento::with('produto')->findOrFail($id);
        // dd($orcamento->produto[0]->Nome_Produto);
       //dd($orcamento->Empresa_cliente);
      
        
       // $orders = $orcamento::with('produto')->get();
        $empresa_cliente = Empresa_cliente::all();

        $minha_empresa = Empresa::all();

        $produto = Produto::all();





        return view('orcamento.modelos.modelo4', [
            'empresa_cliente' => $empresa_cliente,
            'orcamento'       => $orcamento,
            'minha_empresa'   => $minha_empresa,
            'produto'         => $produto,
           // 'orders'          => $orders,

        ]);
    }

    public function destroy($id)
    {
        toast('Orçamento deletado com sucesso!','error');

        Orcamento::findOrFail($id)->delete();
        return redirect('/orcamento/show_orcamento');
    }


        public function geraPdf($id) {


            $orcamento = Orcamento::with('produto')->findOrFail($id);
            $empresa_cliente = Empresa_cliente::all();
            $minha_empresa = Empresa::all();
            $produto = Produto::all();
    
            $pdf = PDF::loadView('orcamento.modelos.modelo3',[
                'orcamento'=> $orcamento,
                'empresa_cliente'=>$empresa_cliente,
                'minha_empresa'=>$minha_empresa,
                'produto'=>$produto
            ]);
    
            return $pdf->download('invoice.pdf');

         }
}
