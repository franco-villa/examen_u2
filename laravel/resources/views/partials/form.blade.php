@csrf
<tr>
    <th>Nombre: </th>
    <td>
        <input type="text" name="nombre" value="{{ old('nombre',$alumno->nombre) }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </td>
</tr>
<tr>
    <th>Curso: </th>
    <td><input type="text" name="curso" value="{{ old('curso',$alumno->curso) }}"> 
        <br> {{ $errors->first('curso') }}
    </td>
</tr>
<tr>
    <th>Nota 1: </th>
    <td><input type="text" name="nota1" value="{{ old('nota1',$alumno->nota1) }}"> 
        <br> {{ $errors->first('nota1') }}
    </td>
</tr>
<tr>
    <th>Nota 2: </th>
    <td><input type="text" name="nota2" value="{{ old('nota2',$alumno->nota2) }}"> 
        <br> {{ $errors->first('nota2') }}
    </td>
</tr>


<tr>
    <td colspan="2" align="center"><button>{{ $btnText }}</button> </td>
</tr>