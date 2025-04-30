<?php

spl_autoload_register(function($nameSpaceClasse){

    $caminho = $nameSpaceClasse.'.php';
    $caminho = str_replace('CJump\\', 'src\\', $caminho);
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);

    if(file_exists($caminho)){
        require_once $caminho;
    }else{
        $msg = '['.$nameSpaceClasse.'] Foi chamada mas ['.$caminho.'] Não existe! - ';
        ECHO $msg;
    }
});