<?php


require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application; 
use app\Controllers\siteController;
use app\Controllers\authController;

$app = new Application(dirname(__DIR__));
// $router = new Router();


$app->router->get('/', [siteController::class, 'home']);

$app->router->get('/contact', [siteController::class, 'contact']);
$app->router->post('/contact', [siteController::class, 'handleContact']);
$app->router->post('/login', [authController::class, 'login']);
$app->router->get('/register', [authController::class, 'register']);
$app->router->post('/register', [authController::class, 'register']);




// $app->userRouter($router);
$app->run();

?>