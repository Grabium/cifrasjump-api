<?php

namespace App\Http\Controllers\PreparacaoDados;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Recursos\Protot\PrototProxyController;

class PreparacaoDadosController extends Controller
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text    = $text.' ';
    }

    private function getMatches(): array
    {
        $regex = '[ABCDEFG][^\s]*[\t\n\s\r]';//tudo até o primeiro espaço.
        preg_match_all('/'.$regex.'/ ', $this->text, $matches, PREG_OFFSET_CAPTURE);
        return $matches[0];
    }

    public function preparar()
    {
        $matches = $this->getMatches();
        PrototProxyController::setProtot($matches);
        dd(PrototProxyController::getProtot());
    }    
}