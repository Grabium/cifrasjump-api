<?php
echo "Buscando o autoload - ";

require_once 'src/autoload.php';
require_once 'vendor/autoload.php';

(new CJump\App)->start();
//(new test\Test)->testar();