<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodoPagoController extends Controller
{
    // Mostrar los métodos de pago
    public function listar()
    {
        echo "lista de métodos de pago";
    }

    // Crear un nuevo método de pago
    public function crear(Request $request)
    {
        echo "métodos de pago creado";
    }

    // Actualizar un método de pago existente
    public function actualizar(Request $request, $id)
    {
        echo "métodos de pago con id:$id actualizado";
    }

    // Eliminar un método de pago
    public function eliminar($id)
    {
        echo "métodos de pago $id eliminado";
    }
}


