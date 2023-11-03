<?php

namespace App\Models;

class Orden
{
    private $id;
    private $productos; // Un array de productos en la orden

    public function __construct($id)
    {
        $this->id = $id;
        $this->productos = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function agregarProducto(Producto $producto, $cantidad = 1)
    {
        if ($cantidad > 0) {
            // Agregar el producto a la orden
            $this->productos[] = ['producto' => $producto, 'cantidad' => $cantidad];
        }
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->productos as $item) {
            $total += $item['producto']->getPrecio() * $item['cantidad'];
        }
        return $total;
    }

    public function getDetalle()
    {
        $detalle = [];
        foreach ($this->productos as $item) {
            $detalle[] = [
                'producto' => $item['producto']->getNombre(),
                'precio' => $item['producto']->getPrecio(),
                'cantidad' => $item['cantidad'],
                'subtotal' => $item['producto']->getPrecio() * $item['cantidad'],
            ];
        }
        return $detalle;
    }
}
