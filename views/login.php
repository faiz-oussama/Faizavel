<?php 
 /**   @var $model \app\models\User */
?>
<h1>Login</h1>
<?php $form = \faizavel\mvc\form\Form::begin('',"post")?>

    <?php echo $form->field($model,'email') ?>
    <?php echo $form->field($model,'password')->passwordField() ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php \faizavel\mvc\form\Form::end() ?>
