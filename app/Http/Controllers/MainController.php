<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PreparacaoDados\PreparacaoDadosController;
use App\Http\Requests\MainRequest;

class MainController extends Controller
{
    private PreparacaoDadosController $preparacao;

    public function __construct(MainRequest $request)
    {
        $text = $request->get('texto');
        $this->preparacao = new PreparacaoDadosController($text);
    }

    public function main()
    {
        $this->preparacao->preparar();
    }
}
