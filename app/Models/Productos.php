<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    public $timestamp = false;

    protected $primaryKey = 'producto_ID';

    protected $fillable = ['producto_ID','nombre','precio','imagen','descripcion','categoria_id'];

    protected $hidden = ['habilitado'];
}
