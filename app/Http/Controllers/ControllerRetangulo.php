<?php

namespace App\Http\Controllers;

use App\Models\Retangulo;
use Illuminate\Http\Request;

class ControllerRetangulo extends Controller
{
    public function criarRetangulo(Request $request) {
        
        try{
            $this->validate($request, [
                'altura' => 'required|numeric',
                'largura' => 'required|numeric',
            ]);
            
            $retangulo = Retangulo::create([
                'altura' => $request->input('altura'),
                'largura' => $request->input('largura')
            
            ]);

            return response()->json([
                'resposta' => 'Valores registrados',
                'retangulo' => $retangulo
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }
}



