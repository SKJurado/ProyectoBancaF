<?php

namespace App\Http\Controllers;

use App\Models\TipoMovimiento;

class TipoMovimientoController extends Controller
{
    public function index()
    {
        return view('tipos-movimiento', [
            'tipos' => TipoMovimiento::all()
        ]);
    }
}
