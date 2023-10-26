<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodosPago extends Model
{
    use HasFactory;

    public $timestamp = false;

    protected $primaryKey = 'metodopago_ID';

    protected $fillable = ['tipo'];

}
