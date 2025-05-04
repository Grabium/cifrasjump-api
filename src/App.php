<?php
namespace CJump;

use CJump\Routes\Route;

class App
{
    public function start(): void
    {
        Route::resolve(null);//Chama proxy (representante).
    }   
}