<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Orcamento;

class EmpresaController extends Controller
{


    public function create (){

        $orcamento = Orcamento::all();
        $criar_empresa = Empresa::get();


             
        //$empresa_existe = Empresa::where('Nome_Empresa', '=', Empresa::get('id'))->first();

       // $empresa_existe = (Empresa::has('Nome_Empresa', $Nome_Empresa)->exists());



     //   dd($minha_empresa);

        // if (Empresa::table('empresas')->where('id', 1)->count() == 0) {
        
        return view('minha_empresa.form_empresa', 
        [
        'criar_empresa'=> $criar_empresa,
        'orcamento' => $orcamento,
      //  'empresa_existe' => $empresa_existe,
            
        
        ]);
    }
        

    public function store (Request $request) {

        toast('Sua empresa foi criado com sucesso!','success');


        $criar_empresa =  new Empresa;

        $criar_empresa -> Nome_Empresa              = $request->Nome_Empresa;
        $criar_empresa -> Cnpj                      = $request->Cnpj;
        $criar_empresa -> Email                     = $request->Email;
        $criar_empresa -> Telefone                  = $request->Telefone;
        $criar_empresa -> Site                      = $request->Site;
        $criar_empresa -> image                     = $request->image;
        $criar_empresa -> linkedin_url              = $request->linkedin_url;
        $criar_empresa -> facebook_url              = $request->facebook_url;
        $criar_empresa -> instagram_url             = $request->instagram_url;


                // Imagem do produto upload
        if ($request->hasFile('image')&& $request->file('image')->isValid()){

            $requestImage = $request -> image;

            $extension = $requestImage-> extension();

            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request -> image->move(public_path('img/empresa'), $imageName);

            $criar_empresa -> image = $imageName;

        }

        $criar_empresa ->save();

        $criar_empresa = Empresa::all();

        return redirect('minha_empresa/form_empresa');
    
    }

    public function show() {
        
        $criar_empresa = Empresa::all();

        $search = request('search');

        if($search) {
            $criar_empresa = Empresa::where ([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $criar_empresa = Empresa::all();
            }
        

        return view('minha_empresa.form_empresa', 
        ['empresa'=> $criar_empresa, 'search' => $search]);

    }


  

    public function update (Request $request, $id){



                        $criar_empresa = Empresa::find($id);
                        $criar_empresa -> Nome_Empresa              = $request->Nome_Empresa;
                        $criar_empresa -> Cnpj                      = $request->Cnpj;
                        $criar_empresa -> Email                     = $request->Email;
                        $criar_empresa -> Telefone                  = $request->Telefone;
                        $criar_empresa -> Site                      = $request->Site;
                        $criar_empresa -> image                     = $request->image;
                        $criar_empresa -> linkedin_url              = $request->linkedin_url;
                        $criar_empresa -> facebook_url              = $request->facebook_url;
                        $criar_empresa -> instagram_url             = $request->instagram_url;
                

                        // Imagem do produto upload
                        if ($request->hasFile('image')&& $request->file('image')->isValid()){

                            $requestImage = $request -> image;
                
                            $extension = $requestImage-> extension();
                
                            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
                
                            $request -> image->move(public_path('img/empresa'), $imageName);
                
                           $criar_empresa -> image = $imageName;
                
                        }
                        $criar_empresa->save();
        //$criar_empresa =    Empresa::findOrFail($request->id) ->update($request->all());

     

        toast('Sua empresa foi editada com sucesso!','success');




        $criar_empresa = Empresa::all();

        return redirect('minha_empresa/form_empresa');

    }


    }
