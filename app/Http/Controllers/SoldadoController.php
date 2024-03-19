<?php

namespace App\Http\Controllers;

use App\Models\soldado;
use Illuminate\Http\Request;

class soldadoController extends Controller
{
    function mostrar() {
        return view('soldado');
    }
    function store(Request $request) {
        $soldado = new soldado();
        $soldado->nombre = $request->nombre;
        $soldado->apellidos = $request->apellidos;
        $soldado->grado = $request->grado;
        $soldado->save();

        return $soldado;
    }
}
