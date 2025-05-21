<?php

namespace App\Http\Controllers\Recursos;

use App\Http\Controllers\Controller;

class TextoController extends Controller
{
    public string $textoOriginal;
    public string $textoFinal;
    public  array $linhas;
    public  array $protots;
    public  array $cifras;

    public function __construct(string $texto)
    {
        $this->textoOriginal = $texto;
    }
}
