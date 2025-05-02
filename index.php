<?php

//Chamada do framework.
require_once 'src/autoload.php';
require_once 'vendor/autoload.php';

require 'src/Routes/api.php';

//Chamada de testes.
//(new test\Test)->testar();


//Chamada da aplicação.
(new CJump\App)->start();
