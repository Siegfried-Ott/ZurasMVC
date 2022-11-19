<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

/**
 * @author:    Siegfried Ott
 * @copyright: 14-Nov-2022
 * @package:   app\controllers
 */

class AuthController extends Controller
{
  public function login()
  {
    // $this->setLayout('auth');
    // if ($request->isPost()) {
    //   return 'Handle submitted data';
    // }
    return $this->render('login');
  }

  public function handleLogin(Request $request)
  {
    $body = $request->getBody();
    return 'Handling login data';
  }

  public function handleRegister(Request $request)
  {
    $registerModel = new RegisterModel();
    if ($request->isPost()) {
      $registerModel->loadData($request->getBody());

      if ($registerModel->validate() && $registerModel->register())
      {
        return 'Success';
      }

      return $this->render('register', ['model' => $registerModel]);
    }
    $this->setLayout('auth');
    return $this->render('register', ['model' => $registerModel]);
  }
}
