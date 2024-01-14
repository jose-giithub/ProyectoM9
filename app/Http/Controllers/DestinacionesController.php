<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinacionesController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener datos de la base de datos o realizar otras acciones
        // Por ahora, simplemente devolveremos la vista
        return view('auth.destinaciones');
    }
}


