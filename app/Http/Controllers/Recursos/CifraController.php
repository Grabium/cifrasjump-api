<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Recursos\Protot\PrototProxyController;

class CifraController extends Controller
{
    public      string $sinal;
    public      string $tom;
    public null|string $enarmonia       = null;
    public   null|bool $menor           = null;
    public   null|bool $diminuto        = null;
    public   null|bool $aumentado       = null;
    public  null|array $intervNumericos = null;
    public null|string $invercao        = null;

    //auxiliares
    public PrototProxyController $protots;
    public              int $tamanhoFinal;
    public              int $inversaoIndexFinal;
    
}
