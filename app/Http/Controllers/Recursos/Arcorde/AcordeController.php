<?php

namespace App\Http\Controllers\Recursos\Arcorde;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Recursos\Protot\PrototProxyController;

use App\Services\Acorde\Tom;
use App\Services\Acorde\Enarmonia;
use App\Services\Acorde\Diminuto;
use App\Services\Acorde\Inversao;
use App\Services\Acorde\Terca;
use App\Services\Acorde\Intervalo;
use App\Services\Acorde\AcordeComposicaoInterface;


use App\Http\Controllers\Recursos\Protot\PrototController;

class AcordeController extends Controller
{
    
    public PrototController $protot;
    public              Tom $tom;
    public        Enarmonia $enarmonia;
    public            Terca $terca;
    public         Diminuto $diminuto;
    public         Inversao $inversao;
    public        Intervalo $intervalo;

    //public   null|bool $aumentado       = null;//falta esse
    //public  null|array $intervNumericos = null;//falta esse
    

    //auxiliares
    public PrototProxyController $protots;
    public              int $tamanhoFinal;
    public              int $inversaoIndexFinal;

    public function __construct(PrototController $protot)
    {
        $this->protot = $protot;
        $this->tom = new Tom($this->get()[0]);
        $this->enarmonia = new Enarmonia();
        $this->terca = new Terca();
        $this->diminuto = new Diminuto();
        $this->inversao = new Inversao();
        $this->intervalo = new Intervalo();
    }

    public function get(): string
    {
        return $this->protot->sinal;
    }
    
}
