<?php
namespace CJump\Routes;

use CJump\Http\Controller\Controller;
use CJump\Http\Request;

class Route extends Routes
{
    public final static function get(string $name, string $path, callable|array $handler): void
    {
        parent::addRoute('GET', $name, $path, $handler);
    }

    public final static function post(string $name, string $path, callable|array $handler): void
    {
        parent::addRoute('POST', $name, $path, $handler);
    }

    public final static function put(string $name, string $path, callable|array $handler): void
    {
        parent::addRoute('PUT', $name, $path, $handler);
    }

    public final static function delete(string $name, string $path, callable|array $handler): void
    {
        parent::addRoute('DELETE', $name, $path, $handler);
    }

    public final static function resolve(string|null $name)
    {
        RouteUsage::resolve($name);//chama o real subject.
    }
}