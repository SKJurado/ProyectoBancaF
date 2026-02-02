<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Sistema Bancario</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Sistema Bancario</h2>

    <div class="list-group">
        <a href="{{ route('empleados.index') }}" class="list-group-item">
            Empleados
        </a>

        <a href="{{ route('clientes.index') }}" class="list-group-item">
            Clientes
        </a>

        <a href="{{ route('cuentas.index') }}" class="list-group-item">
            Cuentas
        </a>

        <a href="{{ route('movimientos.index') }}" class="list-group-item">
            Movimientos
        </a>

    </div>
</div>

</body>
</html>
