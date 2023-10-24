<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    // Mostrar la lista de pedidos
    public function index()
    {
        echo "listar pedidos";
    }

    // Mostrar un pedido específico
    public function detalle($id)
    {
        echo "detalle pedido $id";
    }

    // Crear un nuevo pedido
    public function crear(Request $request)
    {
        echo "pedido creado";
    }

    // Actualizar un pedido existente
    public function actualizar(Request $request, $id)
    {
        echo "pedido con id:$id actualizado";
    }

    // Eliminar un pedido
    public function eliminar($id)
    {
        echo "pedido $id eliminado";
    }
}


