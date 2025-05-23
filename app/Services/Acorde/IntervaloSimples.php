<?php

namespace App\Services\Acorde;

class IntervaloSimples extends Intervalo
{
    /**
   * 
   * @throws \TypeError
   * 
   *******/
    public function validate(mixed $key)
    {
        $regex = '[#b]?[234567]';

        if(!preg_match('/'.$regex.'/', $key) && $key != 'NaoTestado'){
            throw new \TypeError('Intervalo simples inválido: '.$key.'.');
        }
    }
}
