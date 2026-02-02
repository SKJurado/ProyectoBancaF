<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Movimiento;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $cuentas = Cuenta::query();
        $movimientos = Movimiento::query();

        if ($request->filled('cuenta')) {
            $movimientos->where('chr_cuencodigo', $request->cuenta);
        }

        return view('dashboard', [
            'totalClientes' => cliente::count(),
            'totalCuentas'  => cuenta::count(),
            'totalEmpleados'=> empleado::count(),
            'movimientos'   => $movimientos->paginate(10)->withQueryString()
        ]);
    }
}
