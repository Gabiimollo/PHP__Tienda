<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Mostrar la lista de usuarios
    public function listar()
    {
        echo "listar usuarios";
    }

    // Mostrar un usuario específico
    public function detalle($id)
    {
        echo "detalle usuario $id";
    }

    // Crear un nuevo usuario
    public function crear(Request $request)
    {
        echo "usuario creado";
    }

    // Actualizar un usuario existente
    public function actualizar(Request $request, $id)
    {
        echo "usuario con id:$id actualizado";
    }

    // Eliminar un usuario
    public function eliminar($id)
    {
        echo "usuario $id eliminado";
    }
}

