<?php
namespace CJump\Http\Controller;

class TesteController extends Controller
{
    public function testarota()
    {
        echo 'TesteController->testarrota() foi conectada à Rotas mas ainda não recebe parâmetros. :( ';
        //echo .__METHOD__.PHP_EOL;
    }
}