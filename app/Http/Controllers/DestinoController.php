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
    public function mostrar3()//botón destino Tarragona
    {
        return view('destino3');
    } 
    //botón destino Cabárceno
    public function mostrar4()
    {
        return view('destino4');
    } 
    //botón destino Gigantes
    public function mostrar5()
    {
        return view('destino5');
    } 
    //botón destino Monfragüe
    public function mostrar6()
    {
        return view('destino6');
    } 
}
