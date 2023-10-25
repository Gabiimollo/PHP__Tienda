<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    // Mostrar la lista de stock
    public function listar()
    {
        echo "listar stock";
    }

    // Crear un nuevo stock en base a un producto
    public function crear(Request $request)
    {
        echo "stock creado";
    }

    // Actualizar un stock existente
    public function actualizar(Request $request, $id)
    {
        echo "stock con id:$id actualizado";
    }

    // Eliminar un stock
    public function eliminar($id)
    {
        echo "stock $id eliminado";
    }
}


