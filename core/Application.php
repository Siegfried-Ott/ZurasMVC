<?php
namespace app\core;

use app\controllers\SiteController;
use \app\core\Request;
use \app\core\Response;

/**
 * @author:    Siegfried Ott
 * @copyright: 12-Nov-2022
 * @package:   NAMESPACE
 */

class Application
{
  public static string $ROOT_DIR;
  public Router $router;
  public Request $request;
  public Response $response;
  public static Application $app;
  public Controller $controller;

  // getter and setter
  public function getController(): \app\core\Controller
  {
    return $this->controller;
  }
  public function setController(\app\core\Controller $controller): void
  {
    $this->controller = $controller;
  }

  /**
   * Summary of __construct
   */
  public function __construct($rootPath)
  {
    self::$ROOT_DIR = $rootPath;
    self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->router = new Router($this->request, $this->response);
    // $this->controller = new Controller();
  }

  public function run()
  {
    echo $this->router->resolve();
  }
}
