<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class PrototController extends Controller
{
    public bool $aprovado;
    public  int $tamanhoInicial;
    public  int $linha;
    public  int $posicaolNaLinha;
    public  int $inversaoIndexInicial;

    //temporário
    public string $sinal;
}
