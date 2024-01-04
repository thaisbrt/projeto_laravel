<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triangulo extends Model
{
    protected $triangulo = ['altura', 'base'];
    
    private $altura;
    private $base;

    public function __construct($altura, $base)
    {
        $this->altura = $altura;
        $this->base = $base;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        $this->base = $base;
    }

    public function calcularArea()
    {
        return (($this->altura * $this->base) / 2);
    }
}