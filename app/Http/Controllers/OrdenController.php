<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden; // Asegúrate de importar el modelo de Orden

class OrdenController extends Controller
{
    public function listarOrdenes()
    {
        $ordenes = Orden::all(); // Obtener todas las órdenes
        return response()->json($ordenes);
    }

    public function crearOrden(Request $request)
    {
        $data = $request->validate([
            'cliente_id' => 'required',
            'productos' => 'required|array', // Puedes validar los productos de acuerdo a tus necesidades
        ]);

        // Aquí puedes procesar la creación de la orden y sus detalles

        // $orden = Orden::create($data); // Crear una nueva orden
        // ... Procesamiento adicional para agregar productos y detalles de la orden

        // Devolver la orden creada
        // return response()->json($orden, 201);
    }

    public function actualizarOrden(Request $request, Orden $orden)
    {
        $data = $request->validate([
            'estado' => 'required',
        ]);

        $orden->update($data); // Actualizar el estado de la orden
        return response()->json($orden);
    }

    public function eliminarOrden(Orden $orden)
    {
        $orden->delete(); // Eliminar la orden
        return response()->json(null, 204);
    }
}
