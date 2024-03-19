<?php

namespace App\Http\Controllers;
use App\Models\cuerpo;
use Illuminate\Http\Request;

class cuerpoController extends Controller
{
    function mostrar() {
        return view('cuerpo');
    }
    function store(Request $request) {
        $cuerpo = new cuerpo();
        $cuerpo->denominacion = $request->denominacion;
        $cuerpo->save();

        return $cuerpo;
    }
}

