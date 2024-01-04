<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retangulo extends Model
{
    protected $retangulo = ['altura', 'largura'];

    public function __construct($altura, $largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getH()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    public function calcularArea(){

        return ($this->altura * $this->largura);

    }
}