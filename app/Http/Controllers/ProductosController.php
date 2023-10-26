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
        
        }else if (request() -> has('Habilitados')) {
            $producto = Productos::where('habilitado', 1) -> get();

        }else if (request() -> has('Deshabilitados')) {
            $producto = Productos::where('habilitado', 2) -> get();

        }else if (request() -> has('categoria_ID')) {
            $producto = Productos::where('categoria_ID', request('categoria_ID')) -> get();

        } else {
            $producto = Productos::all();
        }
            if ($producto -> isEmpty()) {
                echo json_encode(array('Producto no encontrado ❌'));
            } else {
                return response()->json(['message' => 'Producto recuperado con éxito ✅', 'producto' => $producto]);
            }
    }

    public function listarProductosHabilitados() {

        $producto = Productos::where('habilitado', 1) -> get();

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

        return response()->json(['message' => 'Producto creado con éxito ✅', 'producto' => $producto]);

    }

    public function actualizarProducto(Request $request, Productos $producto) {

        $producto -> update([
            $producto -> nombre = $request -> nombre_nuevo,
            $producto -> precio = $request -> precio_nuevo,
            $producto -> imagen = $request -> imagen_nueva,
            $producto -> descripcion = $request -> descripcion_nueva,
            $producto -> categoria_id = $request -> categoria_nueva,

        ]);

        $producto -> save();

        return response()->json(['message' => 'Producto actualizado con éxito ✅', 'producto' => $producto]);

    }

    public function eliminarProducto(Request $request, Productos $producto) {

        $producto -> update([
            $producto -> habilitado = $request -> habilitado,
        ]);

        $producto -> save();

        return response()->json(['message' => 'Producto eliminado con éxito ✅', 'producto' => $producto]);
    }
}