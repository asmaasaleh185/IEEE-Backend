<?php
/** @var $model \app\Models\User */ 
?>
<h1>Create an acount</h1>

<?php $form = \corepackage\phpmvc\Form\Form::begin('', "post"); ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname'); ?>
        </div>
        <div class="col">
        <?php echo $form->field($model, 'lastname'); ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php \corepackage\phpmvc\Form\Form::end(); ?>

