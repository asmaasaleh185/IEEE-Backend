<?php

namespace app\core;

use app\core\Router;
use app\core\Request;
use app\core\Controller;

class Application{
    public static string $rootDir;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath){
        self::$app = $this;
        self::$rootDir = $rootPath;
        $this->response = new Response();
        $this->request = new Request();
        $this->router = new Router($this->request, $this->response);
        
    }
    public function getController(){
        return $this->controller;
    }
    public function setController(Controller $controller){
        return $this->controller = $controller;
    }
    public function run(){
        echo $this->router->resolve();
    }
}
