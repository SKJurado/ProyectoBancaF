<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Empleados</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
</head>

<body>
<div class="container mt-4">

<h3>Empleados</h3>

<a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">
    Nuevo Empleado
</a>

<table class="table">
<thead>
<tr>
<th>Código</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Nombre</th>
<th>Usuario</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>
@foreach ($empleados as $empleado)
<tr>
<td>{{ $empleado->chr_emplcodigo }}</td>
<td>{{ $empleado->vch_emplpaterno }}</td>
<td>{{ $empleado->vch_emplmaterno }}</td>
<td>{{ $empleado->vch_emplnombre }}</td>
<td>{{ $empleado->vch_emplusuario }}</td>
<td>
    <a href="{{ route('empleados.edit', $empleado->chr_emplcodigo) }}"
       class="btn btn-warning btn-sm">Editar</a>

    <form action="{{ route('empleados.destroy', $empleado->chr_emplcodigo) }}"
          method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm">Eliminar</button>
    </form>
</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</body>
</html>
