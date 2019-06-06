<?php

namespace App\Http\Controllers;
use App\productos;
use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        productos::create($request->all());
     

        return 'Registro exitoso';
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $producto = productos::all();

        //return view('prueba');
        return response()->json($producto);
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $producto = productos::where('idProducto', $id);
        /*   $producto = productos::update([
            'nombre'=>$request->nombre, 
            'descripcion' =>$request->descripcion, 
            'precio'=>$request->precio, 
            'descuento'=>$request->descuento,
            'imagen'=>$request->imagen,
            'etiqueta'=>$request->etiqueta
        ]);*/
        $producto->update($request->all());
        return 'Actualizacion exitosa';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
