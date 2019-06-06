<?php

namespace App\Http\Controllers;
use App\productos;


class productoController extends Controller
{
    public function listarProductos()
    {
        $producto = productos::all();

        //return view('prueba');
        return $producto;
    }

    public function crearProducto(Request $request)
    {
        $producto = productos::create([
            'nombre'=>$request.nombre, 
            'descripcion' =>$request.descripcion, 
            'precio'=>$request.precio, 
            'descuento'=>$request.descuento,
            'imagen'=>$request.imagen,
            'etiqueta'=>$request.etiqueta
        ]);

        return 'Registro exitoso';
    }
    
}
