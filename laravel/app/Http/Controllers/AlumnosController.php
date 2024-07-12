<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use DB;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnoRequest;

class AlumnosController extends Controller
{

    public function index()
    {
        $alumnos = Alumno::orderBy('nombre','asc')->simplePaginate(2);
        return view('alumnos', compact('alumnos'));
    }

    public function show($id){        

        return view('show',[
            'alumno' =>  Alumno::find($id)
        ]);       
    }

    public function create(){        
        return view('create',[
            'alumno' => new Alumno
        ]);       
    }

    public function store(CreateAlumnoRequest $request)
    {        
        // Calcular el promedio
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $promedio = ($nota1 + $nota2) / 2;

        // Determinar la condición
        $condicion = $promedio >= 11 ? 'APROBADO' : 'DESAPROBADO';

        // Obtener la fecha actual en formato Y-m-d
        $fechaRegistro = date('Y-m-d');

        // Crear el alumno con los valores calculados
        Alumno::create([
            'nombre' => $request->input('nombre'),
            'curso' => $request->input('curso'),
            'nota1' => $nota1,
            'nota2' => $nota2,
            'promedio' => $promedio,
            'condicion' => $condicion,
            'fecha_registro' => $fechaRegistro,
        ]);

        return redirect()->route('alumnos.index');          
    }


    public function edit(Alumno $servicio){        
        return view('edit',[
            'servicio' => $servicio
        ]);       
    }

    public function update(Alumno $id, CreateAlumnoRequest $request ){        
        
        $id->update($request->validated());

        return redirect()->route('alumnos.show',$id);       
    }
    
    public function destroy(Alumno $servicio){        
        $servicio->delete();
        return redirect()->route('alumnos.index');        
    }
    // public function servicios(){
    //     $servicios = DB::table('servicios')->get();
    //     return view('servicios', compact('servicios'));
    // }
}
