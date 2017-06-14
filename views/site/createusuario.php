<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Crear Usuario</h1>
<h3><?= $msg ?></h3>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>
<div class="list-form">
 <?= $form->field($model, "nomUsuario")->input("text") ?>   

 <?= $form->field($model, "cedUsuario")->input("text") ?>   

 <?= $form->field($model, "dirUsuario")->input("text") ?>   

 <?= $form->field($model, "celUsuario")->input("text") ?>   

 <?= $form->field($model, "telUsuario")->input("text") ?>   

 <?= $form->field($model, "emailUsuario")->input("text") ?>   

 <?= $form->field($model, "countryUsuario")->input("text") ?>   

 <?= $form->field($model, "fnacUsuario")->input("text") ?>   

 <?= $form->field($model, "sexoUsuario")->input("text") ?>   

 <?= $form->field($model, "fAltaUsuario")->input("text") ?>   

 <?= $form->field($model, "cargoUsuario")->input("text") ?>   

 <?= $form->field($model, "fotoUsuario")->input("text") ?>   

 <?= $form->field($model, "usernameUsuario")->input("text") ?>   

 <?= $form->field($model, "passwUsuario")->input("text") ?>   
</div>

<?= Html::submitButton("Crear Usuario", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>