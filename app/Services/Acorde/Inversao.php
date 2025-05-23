<?php

namespace App\Services\Acorde;

class Inversao
{
    public string $sinal;
    public int    $local;


    /**
   * 
   * @throws \TypeError
   * 
   *******/
    public function __construct(mixed $key = 'NaoTestado')
    {
        $this->validate($key);
        $this->sinal = $key['sinal'];
        $this->local = $key['local'];
    }
  
   /**
   * 
   * @throws \TypeError
   * 
   *******/
    public function validate(mixed $key)
    {
        $regex = '^[ABCDEFG][#b]?';

        if(!preg_match('/'.$regex.'/', $key['sinal']) && $key != 'NaoTestado'){
            throw new \TypeError('Tonalidade da inversão inválida: '.$key['sinal'].'.');
        }
    }
}
