<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    
    public $timestamp = false;
    protected $table = 'categorias';

    protected $primaryKey = 'categoria_ID';

    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

}
