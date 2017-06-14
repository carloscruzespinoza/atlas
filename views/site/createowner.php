<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Crear Dueño</h1>
<h3><?= $msg ?></h3>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>
<div class="list-form">
 <?= $form->field($model, "nomOwner")->input("text") ?>   

 <?= $form->field($model, "phOwner")->input("text") ?>   

 <?= $form->field($model, "celOwner")->input("text") ?>   

 <?= $form->field($model, "addressOwner")->input("text") ?>   

 <?= $form->field($model, "nacionality")->input("text") ?>   
  
</div>

<?= Html::submitButton("Crear Dueño", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>
