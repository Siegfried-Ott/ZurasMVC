<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * @author:    Siegfried Ott
 * @copyright: 13-Nov-2022
 * @package:   app\controllers
 */

class SiteController extends Controller
{
  public function home()
  {
    $params = [
      'name' => 'Siegfried Ott'
    ];

    return $this->render('home', $params);
  }

  public function contact()
  {
    return $this->render('contact', );
  }

  public function handleContact(Request $request)
  {
    $body = $request->getBody();

    echo '<pre>';
    var_dump($body);
    echo '</pre>';

    return 'handle contact data';
  }
}
