<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock; // Asegúrate de importar el modelo de Stock

class StockController extends Controller
{
    public function listarStock()
    {
        $stock = Stock::all(); // Obtener todos los elementos de stock
        return response()->json($stock);
    }

    public function crearStock(Request $request)
    {
        $data = $request->validate([
            'producto_id' => 'required',
            'cantidad' => 'required',
        ]);

        $stock = Stock::create($data); // Crear un nuevo elemento de stock
        return response()->json($stock, 201);
    }

    public function actualizarStock(Request $request, Stock $stock)
    {
        $data = $request->validate([
            'cantidad' => 'required',
        ]);

        $stock->update($data); // Actualizar el elemento de stock
        return response()->json($stock);
    }

    public function eliminarStock(Stock $stock)
    {
        $stock->delete(); // Eliminar el elemento de stock
        return response()->json(null, 204);
    }
}
