<?php
/**
 * Summary of namespace app\views\register
 * @copyright: 12-Nov-2022
 * @package:   NAMESPACE
 */

namespace app\views\register;

use app\core\form\Form;
?>

<h1>Create an account</h1>

<?php $form = Form::begin("", 'post') ?>
<div class="row">
  <div class="col">
    <?php echo $form->field($model, "firstname") ?>
  </div>
  <div class="col">
    <?php echo $form->field($model, "lastname") ?>
  </div>
</div>

<?php echo $form->field($model, "email") ?>

<div class="row">
  <div class="col">
    <?php echo $form->field($model, "password")->passwordField() ?>
  </div>
  <div class="col">
    <?php echo $form->field($model, "confirmPassword")->passwordField() ?>
  </div>
</div><br>
<button type="submit" class="btn btn-success">Submit</button>
<?php Form::end(); ?>
