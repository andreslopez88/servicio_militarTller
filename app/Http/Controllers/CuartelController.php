<?php

namespace App\Http\Controllers;
use App\Models\cuartel;

use Illuminate\Http\Request;

class cuartelController extends Controller
{
    function mostrar() {
        return view('cuartel');
    }
    function store(Request $request) {
        $cuartel = new cuartel();
        $cuartel->nombre = $request->nombre;
        $cuartel->ubicacion = $request->ubicacion;
        $cuartel->save();
        return $cuartel;
    }
}

