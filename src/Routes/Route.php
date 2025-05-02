<?php
namespace CJump\Routes;

use CJump\Http\Controller\Controller;

class Route
{
    private static array $routes = [];

    public static function get(string $name, string $path, callable|array $handler): void
    {
        self::addRoute('GET', $name, $path, $handler);
    }

    public static function post(string $name, string $path, callable|array $handler): void
    {
        self::addRoute('POST', $name, $path, $handler);
    }

    public static function put(string $name, string $path, callable|array $handler): void
    {
        self::addRoute('PUT', $name, $path, $handler);
    }

    public static function delete(string $name, string $path, callable|array $handler): void
    {
        self::addRoute('DELETE', $name, $path, $handler);
    }

    private static function addRoute(string $method, string $name, string $path, callable|array $handler): void
    {
        //self::validateHandlerWhenArray($handler);
        
        self::$routes[$name] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
        ];
    }

    public static function resolve(string $name)
    {
        if (isset(self::$routes[$name])) {
            $route = self::$routes[$name];
            if (is_callable($route['handler'])) {
                call_user_func($route['handler']);
            } elseif (is_array($route['handler'])) {

                //Analisar method e path e puxar de Request os parâmetros. E chamar.
                $r = new $route['handler'][0]();
                $m = $route['handler'][1];
                $r->$m();

            } else {
                // Tratar erro: método inválido.
                echo "Erro: método inválido para a rota '{$name}'.";
            }
            return true;
        }
        return false;
    }

    private static function validateHandlerWhenArray(array $handler):void
    {
        try {


            if (!is_array($handler) || count($handler) !== 2) {
                throw new \InvalidArgumentException("O handler deve ser um array com dois elementos.");
            }
    
            if (!($handler[0] instanceof Controller)) {
                throw new \InvalidArgumentException("O primeiro elemento do handler não é uma instância de Controller.");
            }
    
            $controllerInstance = new $handler[0];
            $methodName = $handler[1];
    
            if (!method_exists($controllerInstance, $methodName)) {
                throw new \BadMethodCallException("O método '{$methodName}' não existe na classe '" . get_class($controllerInstance) . "'.");
            }
    
            echo "Handler válido: [" . get_class($controllerInstance) . ", {$methodName}]\n";
    
            // Aqui você pode chamar o método se necessário:
            // call_user_func_array([$controllerInstance, $methodName], []);
    
        } catch (\InvalidArgumentException $e) {
            echo "Erro de argumento: " . $e->getMessage() . "\n";
        } catch (\BadMethodCallException $e) {
            echo "Erro de método: " . $e->getMessage() . "\n";
        } catch (\Throwable $e) {
            echo "Ocorreu um erro inesperado: " . $e->getMessage() . "\n";
        }
    }
}