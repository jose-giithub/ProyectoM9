<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function mostrar1()//Maspujols destino Cudillero
    {
        return view('destino1');
    }
    public function mostrar2()//botón destino Cudillero
    {
        return view('destino2');
    }
    //botón destino Tarragona
    //botón destino Cabárceno
    //botón destino Gigantes
    //botón destino Monfragüe
}
