<?php

use Frmk\Routing\Route;
use CJump\Http\Controller\CrudController;

// Definindo um handler como uma função anônima
Route::get('anonima', '/anonima', function () {
    echo "Wellcome to anonima!";
});

Route::get('raiz', '/', [CrudController::class, 'rotaraiz']);
Route::post('rotapost', '/rp', [CrudController::class, 'rotapost']);