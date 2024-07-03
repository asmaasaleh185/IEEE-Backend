<?php
/** @var $model \app\Moels\User */ 
?>
<h1>Login</h1>

<?php $form = \app\core\Form\Form::begin('', "post"); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php \app\core\Form\Form::end(); ?>

