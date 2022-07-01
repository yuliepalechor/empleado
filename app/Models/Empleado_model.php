<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado_model extends Model
{
    use HasFactory;
    protected $table='empleado';  
    protected $fillable=[
        'nombre',
        'apellido',
        'direccion',
        'telefono',
    ];      
}
