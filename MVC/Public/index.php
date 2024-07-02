<?php
// echo "Hello World.";

use app\core\Application;
use app\Controllers\authController;
use app\Controllers\siteController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [siteController::class, 'home']);
$app->router->get('/contact', [siteController::class, 'contact']);
$app->router->post('/contact', [siteController::class, 'handleContact']);

$app->router->get('/login', [authController::class, 'login']);
$app->router->post('/login', [authController::class, 'login']);

$app->router->get('/register', [authController::class, 'register']);
$app->router->post('/register', [authController::class, 'register']);


$app->run();
?>