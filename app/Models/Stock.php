<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'estado',
    ];

    // Relación con los productos de la orden
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'orden_producto')
            ->withPivot('cantidad', 'precio_unitario')
            ->withTimestamps();
    }
}
