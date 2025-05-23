<?php

namespace App\Services\Acorde;

class Tom
{
    public string $sinal;
    public int    $tamanho;


    /**
   * 
   * @throws \TypeError
   * 
   *******/
    public function __construct(mixed $key = 'NaoTestado')
    {
        $this->validate($key);
        $this->sinal = $key;
        $this->tamanho = strlen($key);
    }
  
   /**
   * 
   * @throws \TypeError
   * 
   *******/
    public function validate(mixed $key)
    {
        $regex = '^[ABCDEFG][#b]?';

        if(!preg_match('/'.$regex.'/', $key) && $key != 'NaoTestado'){
            throw new \TypeError('Tonalidade inválida para o acorde: '.$key.'.');
        }
    }
}