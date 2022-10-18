<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\User;
use App\Models\domiciliario;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $pedidohist = Pedido::where('user_id' , $user)->get();  
          
        
        
         return view('histpedidos', compact('pedidohist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domi = domiciliario::all();
        return view('newpedido')->with('domiciliario' , $domi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new pedido();
        
         $id = auth()->id();
         $pedido->nombreap = $request->nombreap;
         $pedido->tipo = $request->tipo;
         $pedido->cedula = $request->cedula;
         $pedido->numerotel = $request->numerotel;
         $pedido->direcciondeen = $request->direcciondeen;
         $pedido->direccionderetiro = $request->direccionderetiro;
         $pedido->user_id = $id;

         $pedido->save();
         return redirect("order")->with('crear' , 'Oki');;

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        return view('cancelpe')->with('pedido', $pedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedido = pedido::find($id);

        
        $pedido->estado = $request->estado;

        $pedido->save();
        return redirect('/order')->with('cancelar' , 'Oki');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = pedido::find($id);
        $pedido->delete();
        return redirect('order')->with('eliminar' , 'Ok');
    }
}
