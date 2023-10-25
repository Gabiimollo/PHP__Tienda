<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Mostrar las categorias de todos los productos
    public function listar()
    {
        echo "listar categorías";
    }

    // Crear un nueva categoría
    public function crear(Request $request)
    {
        echo "categoría creada";
    }

    // Actualizar una categoria existente
    public function actualizar(Request $request, $id)
    {
        echo "categoría con id:$id actualizada";
    }

    // Eliminar una categoría
    public function eliminar($id)
    {
        echo "categoría $id eliminada";
    }
}

