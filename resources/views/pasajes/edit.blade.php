<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Pasaje</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Cooperativa de transporte público
        </a>
    </div>
</nav>

<div class="container mt-4">

<h4 class="text-center mb-4">Editar Pasaje</h4>

<form method="POST"
      action="{{ url('/pasajes/'.$pasaje->pasaje_id.'/update') }}"
      class="card p-4">

@csrf

<label>Ruta</label>
<select name="ruta_id" class="form-control mb-2" required>
@foreach($rutas as $r)
<option value="{{ $r->ruta_id }}"
{{ $pasaje->ruta_id == $r->ruta_id ? 'selected' : '' }}>
{{ $r->nombre }}
</option>
@endforeach
</select>

<label>Unidad</label>
<select name="unidad_id" class="form-control mb-2" required>
@foreach($unidades as $u)
<option value="{{ $u->unidad_id }}"
{{ $pasaje->unidad_id == $u->unidad_id ? 'selected' : '' }}>
{{ $u->placa }}
</option>
@endforeach
</select>

<label>Tipo de Pasaje</label>
<select name="tipo_id" class="form-control mb-2" required>
@foreach($tipos as $t)
<option value="{{ $t->tipo_id }}"
{{ $pasaje->tipo_id == $t->tipo_id ? 'selected' : '' }}>
{{ $t->nombre }}
</option>
@endforeach
</select>

<label>Horario</label>
<select name="horario_id" class="form-control mb-2" required>
@foreach($horarios as $h)
<option value="{{ $h->horario_id }}"
{{ $pasaje->horario_id == $h->horario_id ? 'selected' : '' }}>
{{ $h->hora_salida }}
</option>
@endforeach
</select>

<label>Valor</label>
<input type="number" step="0.01" name="valor"
value="{{ $pasaje->valor }}"
class="form-control mb-2" required>

<label>Fecha inicio</label>
<input type="date" name="fecha_inicio"
value="{{ $pasaje->fecha_inicio }}"
class="form-control mb-2" required>

<label>Fecha fin</label>
<input type="date" name="fecha_fin"
value="{{ $pasaje->fecha_fin }}"
class="form-control mb-2" required>

<label>Hora del viaje</label>
<input type="time" name="hora_viaje"
value="{{ $pasaje->hora_viaje }}"
class="form-control mb-3" required>

<button class="btn btn-primary w-100">
    Actualizar Pasaje
</button>

<a href="{{ url('/') }}"
   class="btn btn-secondary w-100 mt-2">
   Cancelar
</a>

</form>

</div>
</body>
</html>
