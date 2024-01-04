<?php

use App\Http\Controllers\ControllerRetangulo;
use App\Http\Controllers\ControllerSoma;
use App\Http\Controllers\ControllerTriangulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('retangulos', [ControllerRetangulo::class, 'criarRetangulo']);

Route::post('triangulos', [ControllerTriangulo::class, 'criarTriangulo']);

Route::post('soma', [ControllerSoma::class, 'calcularSoma']);
