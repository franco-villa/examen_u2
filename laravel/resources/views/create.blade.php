@extends('layout')

@section('title', 'Registrar alumno')

@section('content')

    <h2>Alumnos</h2>
    <table cellpadding="3" cellspacing="5">
        <tr>
            <th colspan="4">Registrar nuevo alumno</th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('alumnos.store') }}" method="post">
            @include('partials.form', ['btnText' => 'Guardar'])
        </form>
    </table>
        
@endsection