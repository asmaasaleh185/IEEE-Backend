<?php

use corepackage\phpmvc\Application;
use app\Controllers\authController;
use app\Controllers\siteController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$config = [
    'userClass' => \app\Models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->on(Application::EVENT_BEFORE_REQUEST, function(){
    echo "Before request";
});


$app->router->get('/', [siteController::class, 'home']);
$app->router->get('/contact', [siteController::class, 'contact']);
$app->router->post('/contact', [siteController::class, 'contact']);

$app->router->get('/login', [authController::class, 'login']);
$app->router->post('/login', [authController::class, 'login']);

$app->router->get('/register', [authController::class, 'register']);
$app->router->post('/register', [authController::class, 'register']);

$app->router->get('/logout', [authController::class, 'logout']);

$app->router->get('/profile', [authController::class, 'profile']);




$app->run();
?>