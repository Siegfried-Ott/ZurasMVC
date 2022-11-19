<?php
/**
 * Summary of Application
 * @author Siegfried Ott
 * @copyright (c) 10-Nov-2022
 * @package app\core
 */

require_once __dir__ . '/../vendor/autoload.php';
use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/register', [AuthController::class, 'handleRegister']);
$app->router->post('/register', [AuthController::class, 'handleRegister']);

$app->router->get('/login', [AuthController::class, 'handleLogin']);
$app->router->post('/login', [AuthController::class, 'handleLogin']);

$app->run();
