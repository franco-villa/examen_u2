@extends('layout')

@section('title', 'Alumno | ' . $alumno->nombre)

@section('content')

    <h2>DETALLE</h2>
    
    <!-- <table class="table table-bordered">
    <tr>
        <th>Nombre</th>            
        <th>Curso</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Promedio</th>
        <th>Condicion</th>
        <th>Fecha Registro</th>
    </tr>
        
    <tr>
        <td>
            {{ $alumno->nombre }}
        </td>
        <td>
            {{ $alumno->curso }}
        </td>
        <td>
            {{ $alumno->nota1 }}
        </td>
        <td>
            {{ $alumno->nota2 }}
        </td>
        <td>
            {{ $alumno->promedio }}
        </td>
        <td>
            {{ $alumno->condicion }}
        </td>
        <td>
             {{ $alumno->fecha_registro }}
        </td>
    </tr>
    </table> -->

    <table class="table table-bordered">
    <tr>
        <th>Nombre</th>            
        <td>
            {{ $alumno->nombre }}
        </td>
    </tr>
    <tr>
        <th>Curso</th>            
        <td>
            {{ $alumno->curso }}
        </td>
    </tr>
    <tr>
        <th>Nota 1</th>            
        <td>
            {{ $alumno->nota1 }}
        </td>
    </tr>
    <tr>
        <th>Nota 2</th>            
        <td>
            {{ $alumno->nota2 }}
        </td>
    </tr>
    <tr>
        <th>Promedio</th>            
        <td>
            {{ $alumno->promedio }}
        </td>
    </tr>
    <tr>
        <th>Condicion</th>            
        <td>
            {{ $alumno->condicion }}
        </td>
    </tr>
    <tr>
        <th>Fecha Registro</th>            
        <td>
            {{ $alumno->fecha_registro }}
        </td>
    </tr>

        
    
    </table>
   

@endsection