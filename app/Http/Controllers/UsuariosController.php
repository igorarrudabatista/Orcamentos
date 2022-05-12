<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() {
        
        $user = User::all();

        return view('usuarios.create', [
            'user' => $user
        ]);
    }


    public function create() {
        


        return view('usuarios.create');

    }



    public function store(Request $request) {


        $usuario =  new User;

        $usuario -> name               = $request->name;
        $usuario -> email              = $request->email;
        $usuario -> password           = $request->password;
  

                // Imagem do produto upload
         if ($request->hasFile('image')&& $request->file('image')->isValid()){

             $requestImage = $request -> image;

             $extension = $requestImage-> extension();

             $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;

             $request -> image->move(public_path('img/produtos'), $imageName);

             $usuario -> image = $imageName;

         }

        $usuario ->save();

        $user = User::all();

        return redirect('/usuarios')->with('msg', 'Usuário cadastrado com sucesso');

    
        }


        public function edit ($id){

            $usuario = User::findOrFail($id);
    
            return view ('usuarios.edit', ['usuario'=> $usuario]);
    
    
        }
    
        public function update (Request $request){
    
               $data = $request->all();
      
    
              // Imagem do produto upload
              if ($request->hasFile('image')&& $request->file('image')->isValid()){
    
                $requestImage = $request -> image;
    
                $extension = $requestImage-> extension();
    
                $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
    
                $request -> image->move(public_path('img/produtos'), $imageName);
    
                $data['image'] = $imageName;
    
            }
    
            usuario::findOrFail($request->id) -> update ($data);
            return redirect('/produtos/produtos')->with('msg', 'Produto editado com sucesso!');
    
    
    
        }
    
        public function destroy($id){
    
            User::findOrFail($id) -> delete();
            return redirect('/usuarios')->with('msg', 'Usuário deletado com sucesso!');
        }

        
    }


