<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Movimientos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
</head>

<body>
<div class="container mt-4">

<h3>Movimientos</h3>

<table class="table">
<thead>
<tr>
<th>Cuenta</th>
<th>N°</th>
<th>Fecha</th>
<th>Empleado</th>
<th>Tipo</th>
<th>Importe</th>
</tr>
</thead>

<tbody>
@foreach ($movimientos as $m)
<tr>
<td>{{ $m->chr_cuencodigo }}</td>
<td>{{ $m->int_movinumero }}</td>
<td>{{ $m->dtt_movifecha }}</td>
<td>{{ $m->chr_emplcodigo }}</td>
<td>{{ $m->chr_tipocodigo }}</td>
<td>{{ number_format($m->dec_moviimporte,2) }}</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</body>
</html>
