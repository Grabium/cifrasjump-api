<?php

namespace App\Http\Controllers\PreparacaoDados;


use App\Http\Controllers\Controller;
use App\Entidade\Acorde\Cifra\CifraProxy;

class PreparacaoDadosController extends Controller
{
    private function getMatches(string $text): array
    {
        $regex = '[ABCDEFG][^\s]*[\t\n\s\r]';//tudo até o primeiro espaço.
        preg_match_all('/'.$regex.'/ ', $text, $matches, PREG_OFFSET_CAPTURE);
        return $matches[0];
    }

    public function preparar(string $text)
    {
        $matches = $this->getMatches($text);
        CifraProxy::setCifras($matches);
        dd(CifraProxy::getCifras());
    }    
}