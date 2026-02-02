<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Pasajes - Cooperativa</title>
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

    <h2 class="text-center mb-4">Sistema de Gestión de Pasajes</h2>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Registrar Pasaje
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/pasajes') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col">
                        <label>Ruta</label>
                        <select name="ruta_id" class="form-control" required>
                            @foreach($rutas as $ruta)
                                <option value="{{ $ruta->ruta_id }}">{{ $ruta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label>Unidad</label>
                        <select name="unidad_id" class="form-control" required>
                            @foreach($unidades as $unidad)
                                <option value="{{ $unidad->unidad_id }}">{{ $unidad->placa }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label>Tipo Pasaje</label>
                        <select name="tipo_id" class="form-control" required>
                            @foreach($tipos as $tipo)
                                <option value="{{ $tipo->tipo_id }}">{{ $tipo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label>Horario</label>
                        <select name="horario_id" class="form-control" required>
                            @foreach($horarios as $horario)
                                <option value="{{ $horario->horario_id }}">
                                    {{ $horario->hora_salida }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label>Valor</label>
                        <input type="number" step="0.01" name="valor"
                               class="form-control" required>
                    </div>

                    <div class="col">
                        <label>Fecha inicio</label>
                        <input type="date" name="fecha_inicio"
                               class="form-control" required>
                    </div>

                    <div class="col">
                        <label>Fecha fin</label>
                        <input type="date" name="fecha_fin"
                               class="form-control" required>
                    </div>

                    <div class="col">
                        <label>Hora</label>
                        <input type="time" name="hora_viaje"
                               class="form-control" required>
                    </div>
                </div>

                <button class="btn btn-success w-100">
                    Guardar Pasaje
                </button>
            </form>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            Filtrar Pasajes
        </div>
        <div class="card-body">
            <form method="GET" action="{{ url('/') }}">
                <div class="row">

                    <div class="col">
                        <label>Ruta</label>
                        <select name="ruta_id" class="form-control">
                            <option value="">-- Todas --</option>
                            @foreach($rutas as $r)
                                <option value="{{ $r->ruta_id }}"
                                    {{ request('ruta_id') == $r->ruta_id ? 'selected' : '' }}>
                                    {{ $r->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label>Fecha inicio</label>
                        <input type="date" name="fecha_desde"
                               value="{{ request('fecha_desde') }}"
                               class="form-control">
                    </div>

                    <div class="col d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            Filtrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            Pasajes Registrados
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Ruta</th>
                    <th>Unidad</th>
                    <th>Conductor</th>
                    <th>Tipo</th>
                    <th>Horario</th>
                    <th>Valor</th>
                    <th>Hora</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($pasajes as $p)
                    <tr>
                        <td>{{ $p->pasaje_id }}</td>
                        <td>{{ $p->ruta->nombre ?? 'N/A' }}</td>
                        <td>{{ $p->unidad->placa ?? 'N/A' }}</td>
                        <td>
                            {{ $p->unidad->conductor->nombre ?? 'Sin' }}
                            {{ $p->unidad->conductor->apellido ?? '' }}
                        </td>
                        <td>{{ $p->tipoPasaje->nombre ?? 'N/A' }}</td>
                        <td>{{ $p->horario->hora_salida ?? 'N/A' }}</td>
                        <td>${{ $p->valor }}</td>
                        <td>{{ $p->hora_viaje }}</td>
                        <td>{{ $p->fecha_inicio }}</td>
                        <td>{{ $p->fecha_fin }}</td>

                        <td class="text-center">
                            <a href="{{ url('/pasajes/'.$p->pasaje_id.'/edit') }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>
<form method="POST"
      action="{{ url('/pasajes/'.$p->pasaje_id.'/delete') }}"
      style="display:inline;"
      onsubmit="return confirm('¿Eliminar este pasaje?');">
    @csrf
    <button class="btn btn-danger btn-sm">
        Eliminar
    </button>
</form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<div class="d-flex justify-content-center mt-3">
    {{ $pasajes->links('pagination::bootstrap-5') }}
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
