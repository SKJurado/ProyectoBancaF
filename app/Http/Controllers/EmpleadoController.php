<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return view('empleados', [
            'empleados' => Empleado::all()
        ]);
    }

    public function create()
    {
        return view('empleado-form');
    }

    public function store(Request $request)
    {
        Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    public function edit($id)
    {
        return view('empleado-form', [
            'empleado' => Empleado::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return redirect()->route('empleados.index');
    }

    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect()->route('empleados.index');
    }
}
