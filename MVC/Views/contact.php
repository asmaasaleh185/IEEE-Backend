<?php
/** @var $title \corepackage\phpmvc\View */
/** @var $model \app\Models\ContactForm */

use corepackage\phpmvc\Form\Form;
use corepackage\phpmvc\Form\TextareaField;

$this->title = 'Contact';
?>

<h1>Contact us</h1>
    <?php $form = Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'subject') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo new TextareaField($model, 'body') ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php \corepackage\phpmvc\Form\Form::end(); ?>


