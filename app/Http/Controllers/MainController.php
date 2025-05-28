<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PreparacaoDados\PreparacaoDadosController;
use App\Http\Requests\MainRequest;
use App\Entidade\Texto\Texto;

class MainController extends Controller
{
    private PreparacaoDadosController $preparacao;
    public string $text;

    public function __construct(MainRequest $request)
    {
        $this->text = new Texto($request->get('texto'))->textoOriginal;
        $this->preparacao = new PreparacaoDadosController();
    }

    public function main()
    {
        $this->preparacao->preparar($this->text);
    }
}
