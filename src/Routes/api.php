<?php
namespace CJump\Routes;

use CJump\Http\Controller\TesteController;

// Definindo um handler como uma função anônima
/*Route::get('home', '/', function () {
    echo "Wellcome to home page!";
});*/

//echo TesteController::class;die();

Route::get('test.id', '/test/{id}', [TesteController::class, 'testarota']);

//echo 'Rotas carregadas!'.PHP_EOL;
/*
// Definindo um handler como uma classe
class UserProfileHandler implements RouteHandlerInterface
{
    private int $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function handle()
    {
        echo "Perfil do usuário com ID: " . $this->userId;
    }
}

Route::get('user.profile', '/user/{id}', new UserProfileHandler(123));
Route::post('submit.form', '/form', function () {
    echo "Dados do formulário recebidos!";
});*/


