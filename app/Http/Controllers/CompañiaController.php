<?php

namespace App\Http\Controllers;
use App\Models\compañia;
use Illuminate\Http\Request;

class CompañiaController extends Controller
{
    function mostrar() {
        return view('Compañia');
    }
    function store(Request $request) {
        $compañia = new compañia();
        $compañia->actividad_principal = $request->actividad_principal;
        $compañia->save();

        return $compañia;
}
}


