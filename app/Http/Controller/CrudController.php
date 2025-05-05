<?php
namespace CJump\Http\Controller;

use Frmk\Http\Request\Request;

class CrudController extends Controller
{

    private Request $request;

    public function __construct()
    {
        $this->request = new Request();  
    }

    public function rotaraiz()
    {
        echo 'TesteController->rotaraiz()'.PHP_EOL;
        var_dump($this->request);
    }

    public function rotapost()
    {
        echo 'TesteController->rotapost() '.PHP_EOL;
        var_dump($this->request);
    }
}