<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cuentas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
</head>

<body>
<div class="container mt-4">

<h3>Cuentas</h3>

<table class="table">
<thead>
<tr>
<th>Cuenta</th>
<th>Cliente</th>
<th>Moneda</th>
<th>Saldo</th>
<th>Estado</th>
</tr>
</thead>

<tbody>
@foreach ($cuentas as $cuenta)
<tr>
<td>{{ $cuenta->chr_cuencodigo }}</td>
<td>{{ $cuenta->chr_cliecodigo }}</td>
<td>{{ $cuenta->chr_monecodigo }}</td>
<td>{{ number_format($cuenta->dec_cuensaldo,2) }}</td>
<td class="estado-{{ strtolower($cuenta->vch_cuenestado) }}">
    {{ $cuenta->vch_cuenestado }}
</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</body>
</html>
