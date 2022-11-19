<?php
namespace app\core;

/**
 * @author:    Siegfried Ott
 * @copyright: 12-Nov-2022
 * @package:   app/core
 */

class Response
{
  public function setStatusCode(int $code)
  {
    http_response_code($code);
  }
}
