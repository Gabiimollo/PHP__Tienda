<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Symfony\Component\Console\Input\Input;

class ProductosController extends Controller 
{

    public function listarProductos() { //enviar en el postman solo el id o solo el nombre

        if (request()->has('producto_ID')) {
            $producto = Productos::where('producto_ID', request('producto_ID')) -> get();
    
        } elseif (request()->has("nombre")) {
            $cadenaBusqueda = request('nombre');
            $producto = Productos::where('nombre', 'like', '%' . $cadenaBusqueda . '%') -> get();

        } else {
            $producto = Productos::all();
        }

            if ($producto -> isEmpty()) {
                echo json_encode(array('Producto no encontrado ❌'));
            } else {
                return response()->json(['message' => 'Producto recuperado con éxito ✅', 'product' => $producto]);
            }
    }

    public function crearProductos(Request $request) {
        $producto = new Productos();
        $producto -> nombre = $request -> nombre;
        $producto -> precio = $request -> precio;
        $producto -> imagen = $request -> imagen;
        $producto -> descripcion = $request -> descripcion;
        $producto -> categoria_id = $request -> categoria;
        $producto -> habilitado = $request -> habilitado;
        $producto -> save();
        return response()->json(['message' => 'Producto creado con éxito ✅', 'product' => $producto]);

    }

}