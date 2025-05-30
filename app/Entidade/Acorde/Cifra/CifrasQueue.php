<?php

namespace App\Entidade\Acorde\Cifra;

class CifrasQueue
{
    static public array $cifras;

    static public function setCifras(array $matches)
    {
        foreach($matches as $match){
            self::$cifras[$match[1]] = new Cifra($match[0]);
        }
    }

    static public function getCifras(): array
    {
        return self::$cifras;
    }
}
