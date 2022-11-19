<?php
namespace app\core\form;

use app\core\Model;

/**
 * Summary of class Field
 * @author Siegfried Ott
 * @copyright (c) 18-Nov-2022
 * @package app\core\field
 */
class Field
{
  public Model $model;
  public string $attribute;

  /**
   * @author Siegfried Ott
   * @copyright (c) $CURRENT_DATE-$CURRENT_MONTH_NAME_SHORT-$CURRENT_YEAR
   * @package app\
   */
  public function __construct(Model $model, $attribute)
  {
    $this->model = $model;
    $this->attribute = $attribute;
  }

  public function __toString()
  {
    return
    sprintf('
      <div class="form-group">
        <label>%s:</label>
        <input type="%s" name="%s" value="%s" class="form-control%s">
        <div class="invalid-feedback">%s</div>
      </div>
      ', ucfirst($this->attribute),
         (str_contains($this->attribute, "assword") ? "password" : "text"),
         $this->attribute,
         $this->model->{ $this->attribute},
         $this->model->hasError($this->attribute) ? ' is-invalid': '',
         $this->model->getFirstError($this->attribute),
    );
  }
}
