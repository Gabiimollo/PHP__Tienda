<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    // Mostrar detalle del carrito
    public function detalle($id)
    {
        echo "detalle carrito $id";
    }

    // Crear un nuevo carrito
    public function crear(Request $request)
    {
        echo "carrito creado";
    }

    // Actualizar un carrito existente
    public function actualizar(Request $request, $id)
    {
        echo "carrito con id:$id actualizado";
    }

    // Eliminar un carrito
    public function eliminar($id)
    {
        echo "carrito $id eliminado";
    }
}


