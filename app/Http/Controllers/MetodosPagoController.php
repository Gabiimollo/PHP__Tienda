<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetodosPago;
use Symfony\Component\Console\Input\Input;

class MetodosPagoController extends Controller
{
    public function listarMetodosPago() { //enviar en el postman solo el id o solo el tipo

        if (request()->has('metodopago_ID')) {
            $metodopago = MetodosPago::where('metodopago_ID', request('metodopago_ID')) -> get();
    
        } elseif (request()->has('tipo')) {
            $cadenaBusqueda = request('tipo');
            $metodopago = MetodosPago::where('tipo', 'like', '%' . $cadenaBusqueda . '%') -> get();

        } else {
            $metodopago = MetodosPago::all();
        }

            if ($metodopago -> isEmpty()) {
                echo json_encode(array('Metodo de Pago no encontrado ❌'));
            } else {
                return response()->json(['message' => 'Metodo de pago recuperado con éxito ✅', 'metodopago' => $metodopago]);
            }
    }

    public function crearMetodosPago(Request $request) {
        $metodopago = new MetodosPago();
        $metodopago -> tipo = $request -> tipo;
        $metodopago -> save();

        return response()->json(['message' => 'Metodo de Pago creado con éxito ✅', 'metodopago' => $metodopago]);

    }
    
}

