<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
class pedidoController extends Controller
{
    
    
    
    public function create()
    {
        
       
            return view('newpedido');
        
    }

    public function show()
    {
        $pedido = \DB::table('pedidos')
        ->select('pedidos.*')
        ->orderBy('id', 'DESC')
        ->get();
        
            return view('histpedidos')->with('pedidohist' , $pedido);
        
    }

    public function store(Request $request){

          $pedido = new pedido();

         $pedido->nombreap = $request->nombreap;
         $pedido->tipo = $request->tipo;
         $pedido->cedula = $request->cedula;
         $pedido->numerotel = $request->numerotel;
         $pedido->direcciondeen = $request->direcciondeen;
         $pedido->direccionderetiro = $request->direccionderetiro;
         

         $pedido->save();
         return redirect()->route('pedidos.hist' , $pedido);

        
    }
}
