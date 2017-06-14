<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Crear Tipo Listing</h1>
<h3><?= $msg ?></h3>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>
<div class="list-form">
 <?= $form->field($model, "nomListing")->input("text") ?>   
 
</div>

<?= Html::submitButton("Crear Tipo Listing", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>


