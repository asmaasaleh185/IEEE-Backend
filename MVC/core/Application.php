<?php
namespace app\core;

use app\core\Router;
use app\core\Request;
use app\core\Database;
use app\core\Response;
use app\core\Controller;

class Application{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $reponse;
    
    public Database $db;

    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath, array $config){
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

        // part 3
        $this->db = new Database($config['db']);
    }
    public function getController(): Controller{
        return $this->controller;
    }

    public function setController(Controller $controller): void{
        $this->controller = $controller;
    }

    public function run(){
        echo $this->router->resolve();
    }
}