<?php

namespace App\Http\Controllers;

use App\Models\Retangulo;
use App\Models\Triangulo;
use Illuminate\Http\Request;

class ControllerSoma extends Controller
{
    public function calcularSoma(Request $request) {
        
        $areasTriangulos = Triangulo::all()->sum->calcularArea();

        $areasRetangulos = Retangulo::all()->sum->calcularArea();

        $somaAreas = $areasTriangulos + $areasRetangulos;

        return response()->json(['soma_areas' => $somaAreas]);

    }
}