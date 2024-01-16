<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function mostrar()
    {
        return view('destino');
    }
}
