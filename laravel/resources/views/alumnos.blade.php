@extends('layout')

@section('content')
    
    <div class="row">
        <h2>Alumnos</h2>
        <tr>
            <td colspan="4">
                <a href=" {{ route('alumnos.create') }} ">Nuevo Alumno</a>
            </td>
        </tr>
    </div>
    <br>
    <table>       
        @if($alumnos)
            @php 
                $currentPage = $alumnos->currentPage();
                $perPage = $alumnos->perPage();
                $contador = ($currentPage - 1) * $perPage + 1;
            @endphp
            @foreach($alumnos as $alumno)
            <tr>
                <td style="border: 1px solid #000; padding: 10px;">{{ $contador }}</td>
                <td style="border: 1px solid #000; padding: 10px;" colspan="4">
                    <a href="{{ route('alumnos.show', $alumno) }}">{{ $alumno->nombre }} </a>                         
                </td>
            </tr>
            @php $contador++; @endphp
            @endforeach
        @else
            <p>No existe ningun alumno que mostar</p>
        @endif        
    </table>
    <br>
    <tr>
        <td colspan="1">
            <div class="pagination pagination-sm pagination-custom .page-link">
            {{$alumnos->links()}}
            </div>
        </td>
    </tr>
@endsection