<?php
namespace CJump;

use CJump\Routes\Route;

class App
{
    public function start(): void
    {
        //$r = new Http\Request($_REQUEST);
        //var_dump($r->all());
        // Em algum ponto da sua aplicação, para executar a rota:




        $routeName = 'test.id'; // Ou 'user.profile', 'submit.form', etc.

        if (Route::resolve($routeName)) {
            // A rota foi encontrada e executada
        } else {
            echo "Rota '{$routeName}' não encontrada.";
        }
    }
}