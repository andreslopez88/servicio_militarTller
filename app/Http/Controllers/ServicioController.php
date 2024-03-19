<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;

class servicioController extends Controller
{
    function mostrar() {
        return view('servicio');
    }
    function store(Request $request) {
        $servicio = new servicio();
        $servicio->fecha_realizacion =$request->fecha_realizacion;
        $servicio->save();
        return $servicio;
    }
}
