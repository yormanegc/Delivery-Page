<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\domiciliario;
use Illuminate\Support\Facades\Storage;
use Dotenv\Validator;
use Illuminate\Support\Facades\Hash;
class domiciliarioController extends Controller
{
    public function show()
    {
         
            $domi = domiciliario::all();    

            return view('domihist')->with('domihist' , $domi);
        
    }

    public function create()
    {
       
            return view('newdomi');
        
    }

    public function store(Request $request){

        

        $domiciliario = new domiciliario();
        // $request->validate([
        //         'file' => 'required|Image|max:2048'
        // ]);
        $url = Storage::put('imagp', $request->file('img'));

        
              
        $domiciliario->nombre = $request->nombre;
        $domiciliario->apellido = $request->apellido;
        $domiciliario->cedula = $request->cedula;
        $domiciliario->numerotelle = $request->numerotelle;
        $domiciliario->direccion = $request->direccion;
        $domiciliario->sexo = $request->sexo;
        // $domiciliario->img = $request->img;
        // $url2 = Storage::url($url);
        $domiciliario->img = $url;
        

         $domiciliario->save();
        return redirect()->route('domiciliario.show' , $domiciliario);
   }

   public function edit(Request $request,  $id){
     
       

        
         $domiciliario = domiciliario::find($id);

         
        
         return view('domiedit')->with('domiciliario', $domiciliario);
     
   }
   
   public function update(Request $request, $id ){

     $domiciliario =  domiciliario::find($id);
      

        $domiciliario->nombre = $request->get('nombre');
        $domiciliario->apellido = $request->get('apellido');
        $domiciliario->cedula = $request->get('cedula');
        $domiciliario->numerotelle = $request->get('numerotelle');
        $domiciliario->direccion = $request->get('direccion');
        
         
         $domiciliario->save();
        return redirect()->route('domiciliario.show' , $domiciliario);
   }

   


   public function destroy(Request $request){
        $id = $request->input('id');
        domiciliario::find($id)->delete();
        return redirect('/Domiciliarios');
   }
}
