<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes', [
            'clientes' => Cliente::all()
        ]);
    }

    public function create()
    {
        return view('cliente-form');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }
}
