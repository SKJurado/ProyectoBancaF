<?php

namespace App\Http\Controllers;

use App\Models\Moneda;

class MonedaController extends Controller
{
    public function index()
    {
        return view('monedas', [
            'monedas' => Moneda::all()
        ]);
    }
}
