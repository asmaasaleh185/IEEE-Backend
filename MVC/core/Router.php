<?php
namespace app\core;

use app\core\Request;
use app\core\Response;


class Router{
    protected array $routes  = [];
    public Request $request;
    public Response $response;

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
        // echo '<pre>';
        // var_dump($_SERVER);
        // echo '</pre>';
        
        $path = $this->request->getPath();
        // echo '<pre>';
        // var_dump($path);
        // echo '</pre>';
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false; 
        if($callback === false){
            $this->response->setStatusCode(404);
            // echo $this->renderContent('Not Found');
            return $this->renderView("_404");
            exit;
        }
        // echo '<pre>';
        // var_dump($callback);
        // echo '</pre>';
        if(is_string($callback)){
            return $this->renderView($callback);
        }

        if (is_array($callback)) {
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }

        echo call_user_func($callback, $this->request);
    }
    public function renderView($view, $params = []){
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyViews($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
        include_once Application::$rootDir."/Views/$view.php";
    }
    public function renderContent($viewContent){
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
        include_once Application::$rootDir."/Views/$view.php";
    }

    protected function layoutContent(){
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$rootDir."/Views/layout/$layout.php";
        return ob_get_clean();
    }
    protected function renderOnlyViews($view, $params){
        if($view !== 'contact'){
            foreach($params as $key => $value){
                $$key = $value;
            }
        }
        ob_start();
        include_once Application::$rootDir."/Views/$view.php";
        return ob_get_clean();
    }
}