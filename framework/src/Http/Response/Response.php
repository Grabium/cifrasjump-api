<?php
namespace Frmk\Http\Response;

abstract class Response
{
    protected Array $data = [];

    public function send(Array|null $data = null): void
    {
        if(is_null($data)){
            echo 'Aplicação não teve nada a responder.';
            die();
        }
        
        $this->data = $data;
        $this->setHead();
        $response = $this->setformact();
        echo $response;
    }

    protected abstract function setHead();

    protected abstract function setformact();
}

final class ResponseJSON extends Response
{
    protected function setHead():void
    {
        header('Content-Type: application/json');
    }

    //fazer um try-catch.
    protected function setformact(): string
    {
        return json_encode(['code' => 200, 'data' => $this->data], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
    }
}

