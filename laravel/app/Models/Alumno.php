<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';
    protected $guarded = [];

    protected $fillable = ['nombre', 'curso', 'nota1', 'nota2', 'promedio', 'condicion', 'fecha_registro'];

}
