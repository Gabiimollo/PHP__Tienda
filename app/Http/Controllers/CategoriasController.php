<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use Symfony\Component\Console\Input\Input;

class CategoriasController extends Controller
{
    public function listarCategorias() { //enviar en el postman solo el id o solo el nombre

        if (request()->has('categoria_ID')) {
            $categoria = Categorias::where('categoria_ID', request('categoria_ID')) -> get();
    
        } elseif (request()->has('nombre')) {
            $cadenaBusqueda = request('nombre');
            $categoria = Categorias::where('nombre', 'like', '%' . $cadenaBusqueda . '%') -> get();

        } else {
            $categoria = Categorias::all();
        }

            if ($categoria -> isEmpty()) {
                echo json_encode(array('Categoria no encontrada ❌'));
            } else {
                return response()->json(['message' => 'Categoria recuperada con éxito ✅', 'categoria' => $categoria]);
            }
    }

    public function crearCategorias(Request $request) {
        $categoria = new Categorias();
        $categoria -> nombre = $request -> nombre;
        $categoria -> save();

        return response()->json(['message' => 'Categoria creada con éxito ✅', 'categoria' => $categoria]);

    }
}
