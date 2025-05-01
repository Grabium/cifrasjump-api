<?php
namespace CJump;

class App
{
    public function start(): void
    {
        $r = new Http\Request($_REQUEST);
        var_dump($r->all());
    }
}