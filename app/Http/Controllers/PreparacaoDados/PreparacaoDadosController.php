<?php

namespace App\Http\Controllers\PreparacaoDados;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use Illuminate\Http\Request;

class PreparacaoDadosController extends Controller
{
    public function preparar(MainRequest $request)
    {
        //$regex = '^[ABCDEFG][^\s]*\s';//tudo até o primeiro espaço.
        $regex = '[ABCDEFG](.)*[\t\n\s\r]';//tudo até o primeiro espaço.
        $t = $request->get('texto').' ';
        preg_match_all('/'.$regex.'/ ', $t, $matches, PREG_OFFSET_CAPTURE);
        dd($matches);
    }
}
