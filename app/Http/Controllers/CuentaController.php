<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Cliente;
use App\Models\Moneda;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function index()
    {
        return view('cuenta', [
            'cuentas' => Cuenta::all()
        ]);
    }

    public function create()
    {
        return view('cuenta-form', [
            'clientes' => Cliente::all(),
            'monedas'  => Moneda::all(),
            'sucursales' => Sucursal::all()
        ]);
    }

    public function store(Request $request)
    {
        Cuenta::create($request->all());
        return redirect()->route('cuentas.index');
    }

    public function show($id)
    {
        return view('cuenta-detalle', [
            'cuenta' => Cuenta::findOrFail($id)
        ]);
    }
}
