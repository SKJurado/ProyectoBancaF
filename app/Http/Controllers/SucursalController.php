<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index()
    {
        return view('sucursales', [
            'sucursales' => Sucursal::all()
        ]);
    }
}
