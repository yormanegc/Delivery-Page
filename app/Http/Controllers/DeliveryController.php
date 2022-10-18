<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\domiciliario;
use Illuminate\Support\Facades\Storage;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domi = domiciliario::all();    

        return view('admin.domihist')->with('domihist' , $domi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newdomi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return redirect('delivery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domiciliario = domiciliario::find($id);
        return view('admin.domiedit')->with('domiciliario', $domiciliario);
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
        $domiciliario = domiciliario::find($id);

        $domiciliario->nombre = $request->nombre;
        $domiciliario->apellido = $request->apellido;
        $domiciliario->cedula = $request->cedula;
        $domiciliario->numerotelle = $request->numerotelle;
        $domiciliario->direccion = $request->direccion;
        // $domiciliario->sexo = $request->sexo;
        // $domiciliario->img = $request->img;
        // $url2 = Storage::url($url);
        
        

         $domiciliario->save();
        return redirect('delivery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domiciliario = domiciliario::find($id);
        $domiciliario->delete();
        return redirect('/delivery')->with('eliminar' , 'Ok');
    }
}
