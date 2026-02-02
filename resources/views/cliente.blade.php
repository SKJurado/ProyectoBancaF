<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Clientes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
</head>

<body>
<div class="container mt-4">

<h3>Clientes</h3>

<a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">
    Nuevo Cliente
</a>

<table class="table">
<thead>
<tr>
<th>Código</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Nombre</th>
<th>DNI</th>
<th>Ciudad</th>
</tr>
</thead>

<tbody>
@foreach ($clientes as $cliente)
<tr>
<td>{{ $cliente->chr_cliecodigo }}</td>
<td>{{ $cliente->vch_cliepaterno }}</td>
<td>{{ $cliente->vch_cliematerno }}</td>
<td>{{ $cliente->vch_clienombre }}</td>
<td>{{ $cliente->chr_cliedni }}</td>
<td>{{ $cliente->vch_clieciudad }}</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</body>
</html>
