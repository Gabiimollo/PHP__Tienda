<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenController extends Controller
{
    // Mostrar las ordenes
    public function index()
    {
        echo "listar ordenes";
    }

    // Crear un nueva orden
    public function crear(Request $request)
    {
        echo "orden creada";
    }

    // Actualizar una orden existente
    public function actualizar(Request $request, $id)
    {
        echo "orden con id:$id actualizada";
    }

    // Eliminar una orden
    public function eliminar($id)
    {
        echo "orden $id eliminada";
    }
}
