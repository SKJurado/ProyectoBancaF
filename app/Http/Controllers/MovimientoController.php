<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimiento;
use App\Models\Cuenta;
use App\Models\TipoMovimiento;
use DB;

class MovimientoController extends Controller
{
    public function index()
    {
        return view('movimientos', [
            'movimientos' => Movimiento::orderBy('dtt_movifecha','desc')->get()
        ]);
    }

    public function create()
    {
        return view('movimiento-form', [
            'cuentas' => Cuenta::all(),
            'tipos'   => TipoMovimiento::all()
        ]);
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {

            $cuenta = Cuenta::findOrFail($request->chr_cuencodigo);

            $numero = $cuenta->int_cuencontmov + 1;

            Movimiento::create([
                'chr_cuencodigo' => $cuenta->chr_cuencodigo,
                'int_movinumero' => $numero,
                'dtt_movifecha'  => now(),
                'chr_emplcodigo' => $request->chr_emplcodigo,
                'chr_tipocodigo' => $request->chr_tipocodigo,
                'dec_moviimporte'=> $request->dec_moviimporte
            ]);

            $cuenta->int_cuencontmov = $numero;
            $cuenta->save();
        });

        return redirect()->route('movimientos.index');
    }
}
