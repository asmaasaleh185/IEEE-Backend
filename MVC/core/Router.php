<?php

namespace app\core;

use app\core\Request;
use app\core\Response;
use app\core\Application;

class Router{
    public Request $request;
    public Response $reponse;
    protected array $routes = [];

    public function __construct(Request $request, Response $response){
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }
    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }

    public function resolve(){
        // echo "<pre>";
        // var_dump($_SERVER);
        // echo "</pre>";
        
        $path = $this->request->getPath();
        $method = $this->request->method();
        
        // echo "<pre>";
        // var_dump($this->routes);
        // echo "</pre>";

        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false){
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        if (is_array($callback)){
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }
        
        // echo "<pre>";
        // var_dump($callback);
        // echo "</pre>";

        echo call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = []){
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
        // include_once Application::$ROOT_DIR."/Views/$view.php";
    }
    public function renderContent($viewContent){
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }
    protected function layoutContent(){
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR."/Views/layouts/$layout.php";
        return ob_get_clean();
    }
    protected function renderOnlyView($view, $params){
        foreach ($params as $key => $value){
            $$key = $value;
        }
        // echo "<pre>";
        // var_dump($name);
        // echo "</pre>";

        ob_start();
        include_once Application::$ROOT_DIR."/Views/$view.php";
        return ob_get_clean();
    }
}