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
  public const TYPE_TEXT = 'text';
  public const TYPE_PASSWORD = 'password';
  public const TYPE_NUMBER = 'number';
  public string $type;
  public Model $model;
  public string $attribute;

  /**
   * @author Siegfried Ott
   * @copyright (c) $CURRENT_DATE-$CURRENT_MONTH_NAME_SHORT-$CURRENT_YEAR
   * @package app\
   */
  public function __construct(Model $model, $attribute)
  {
    $this->type = self::TYPE_TEXT;
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
         $this->type,
         $this->attribute,
         $this->model->{ $this->attribute},
         $this->model->hasError($this->attribute) ? ' is-invalid': '',
         $this->model->getFirstError($this->attribute),
    );
  }

  public function passwordField() 
  {
    $this->type = self::TYPE_PASSWORD;
    return $this;
  }
}

/* 
    <input type="button">
    <input type="checkbox">
    <input type="color">
    <input type="date">
    <input type="datetime-local">
    <input type="email">
    <input type="file">
    <input type="hidden">
    <input type="image">
    <input type="month">
    <input type="number">
    <input type="password">
    <input type="radio">
    <input type="range">
    <input type="reset">
    <input type="search">
    <input type="submit">
    <input type="tel">
    <input type="text">
    <input type="time">
    <input type="url">
    <input type="week">
*/