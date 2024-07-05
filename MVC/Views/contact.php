<?php
/** @var $title \app\core\View */
/** @var $model \app\Models\ContactForm */

use app\core\Form\Form;
use app\core\Form\TextareaField;

$this->title = 'Contact';
?>

<h1>Contact us</h1>
    <?php $form = Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'subject') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo new TextareaField($model, 'body') ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php \app\core\Form\Form::end(); ?>


