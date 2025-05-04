<?php

require_once 'src/autoload.php';
require_once 'vendor/autoload.php';
require_once 'routes_sign/api.php';//inscreve rotas

(new CJump\App)->start();