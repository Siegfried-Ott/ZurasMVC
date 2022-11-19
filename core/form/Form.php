<?php
/**
 * Summary of namespace app\core\form
 */
namespace app\core\form;

use app\core\form\Field;
use app\core\Model;

/**
 * Summary of class Form
 * @author Siegfried Ott
 * @copyright (c) 17-Nov-2022
 * @package app\core\form
 */
class Form
{
  public static function begin($action, string $method)
  {
    echo sprintf('<form action="%s" method="%s">' . "\n", $action, $method);
    return new Form();
  }

  public static function end()
  {
    echo '</form>';
  }

  public function field(Model $model, $attribute)
  {
    /* todo 40:02 */
    return new Field($model, $attribute);
  }
}
