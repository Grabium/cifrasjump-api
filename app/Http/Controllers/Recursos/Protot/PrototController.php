<?php

namespace App\Http\Controllers\Recursos\Protot;

use App\Http\Controllers\Controller;

class PrototController extends Controller
{
    public int $indice;
    public string $sinal;
    public int $tamanho;

    public function __construct(int $indice, string $sinal, int $tamanho )
    {
        $this->indice = $indice;
        $this->sinal  = $sinal;
        $this->tamanho= $tamanho;
    }

}
