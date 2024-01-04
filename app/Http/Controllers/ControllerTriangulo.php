<?php

namespace App\Http\Controllers;

use App\Models\Triangulo;
use Illuminate\Http\Request;


class ControllerTriangulo extends Controller
{
    public function criarTriangulo(Request $request) {
        
        try{
            $this->validate($request, [
                'altura' => 'required|numeric',
                'base' => 'required|numeric',
            ]);

            $triangulo = Triangulo::create([
                'altura' => $request->input('altura'),
                'base' => $request->input('base')
            
            ]);
            return response()->json([
                'resposta' => 'Valores registrados',
                'triangulo' => $triangulo
            ], 200);
        }catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }
}