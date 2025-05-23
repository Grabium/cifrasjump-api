<?php

namespace App\Http\Controllers\Recursos\Protot;

use App\Http\Controllers\Controller;

class PrototProxyController extends Controller
{
    static public array $protots;

    static public function setProtot(array $matches)
    {
        foreach($matches as $key => $match){
            self::$protots[$key] = new PrototController($match[1], $match[0], strlen($match[0]));
        }
    }

    static public function getProtot(): array
    {
        return self::$protots;
    }
}
