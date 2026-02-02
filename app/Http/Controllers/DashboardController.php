<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Pasaje::with([
            'ruta',
            'unidad.conductor',
            'tipoPasaje',
            'horario'
        ]);


        if ($request->filled('ruta_id')) {
            $query->where('ruta_id', $request->ruta_id);
        }

        if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
            $query->whereBetween('fecha_inicio', [
                $request->fecha_inicio,
                $request->fecha_fin
            ]);
        }

        return view('dashboard', [
            'rutas'       => Ruta::all(),
            'unidades'    => Unidad::all(),
            'conductores' => Conductor::all(),
            'tipos'       => TipoPasaje::all(),
            'horarios'    => Horario::all(),
            'pasajes'     => $query->get(),
            
            'pasajes'     => $query->paginate(10)->withQueryString()
        ]);
        
    }
}
