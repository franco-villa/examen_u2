<thead class="table table-bordered">
  <tr>      
    <th scope="col" class="{{ request()->routeIs('home') ? 'activo' : '' }}"><a href="{{ route('home') }}">HOME</a></th> 
    <th scope="col" class="{{ request()->routeIs('alumnos.create') ? 'activo' : ''}}"><a href="{{ route('alumnos.create') }}">Registro</a></th> 
    <th scope="col" class="{{ request()->routeIs('alumnos.index') ? 'activo' : ''}}"><a href="{{ route('alumnos.index') }}">LISTADO</a></th> 
  </tr>
</thead>
