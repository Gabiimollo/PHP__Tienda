<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar la lista de productos
    public function index()
    {
        echo "listar productos";
    }

    // Mostrar un producto específico
    public function detalle($id)
    {
        echo "detalle producto $id";
    }

    // Crear un nuevo producto
    public function crear(Request $request)
    {
        echo "producto creado";
    }

    // Actualizar un producto existente
    public function actualizar(Request $request, $id)
    {
        echo "producto con id:$id actualizado";
    }

    // Eliminar un producto
    public function eliminar($id)
    {
        echo "producto $id eliminado";
    }
}

