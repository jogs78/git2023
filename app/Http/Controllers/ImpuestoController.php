<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpuestoController extends Controller
{
    function pagarImpuestos (){
        $servicios = ['XYZ-203','XYZ-206','XYZ-210'];
        return view("terrenos.impuestos" , compact('servicios'));
    }
    function pagarRecargos (){
        $servicios = ['XYZ-203','XYZ-206','XYZ-210'];
        return view("terrenos.recargos" , compact('servicios'));
    }

}
