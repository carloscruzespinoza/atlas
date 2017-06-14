<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>CrearListing</h1>
<h3><?= $msg ?></h3>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>
<div class="list-form">
 <?= $form->field($model, "idStatusListing")->input("text") ?>   

 <?= $form->field($model, "codInterListing")->input("text") ?>   

 <?= $form->field($model, "fechaListing")->input("text") ?>   

 <?= $form->field($model, "comision")->input("text") ?>   

 <?= $form->field($model, "fotoArchivo")->input("text") ?>   

 <?= $form->field($model, "scannedFisico")->input("text") ?>   

 <?= $form->field($model, "escritura")->input("text") ?>   

 <?= $form->field($model, "plano")->input("text") ?>   

 <?= $form->field($model, "rotulado")->input("text") ?>   

 <?= $form->field($model, "nomListing")->input("text") ?>   

 <?= $form->field($model, "idOwner")->input("text") ?>   

 <?= $form->field($model, "addressListing")->input("text") ?>   

 <?= $form->field($model, "cityListing")->input("text") ?>   

 <?= $form->field($model, "timeinMarket")->input("text") ?>   

 <?= $form->field($model, "idTipoListing")->input("text") ?>   

 <?= $form->field($model, "rooms")->input("text") ?>   
 
 <?= $form->field($model, "baths")->input("text") ?>   
 
 <?= $form->field($model, "garage")->input("text") ?>   
 
 <?= $form->field($model, "cieloFalso")->input("text") ?>   
 
 <?= $form->field($model, "salas")->input("text") ?>   
 
 <?= $form->field($model, "stories")->input("text") ?>   
 
 <?= $form->field($model, "terraza")->input("text") ?>   
  
 <?= $form->field($model, "bodega")->input("text") ?>   
 
 <?= $form->field($model, "piscina")->input("text") ?>   
 
 <?= $form->field($model, "spa")->input("text") ?>   
 
 <?= $form->field($model, "jardin")->input("text") ?>   
 
 <?= $form->field($model, "hotWater")->input("text") ?>   
 
 <?= $form->field($model, "bbqArea")->input("text") ?> 
  
 <?= $form->field($model, "landArea")->input("text") ?>   
 
 <?= $form->field($model, "builtArea")->input("text") ?>   
 
 <?= $form->field($model, "aguaPotable")->input("text") ?>   
 
 <?= $form->field($model, "lineaTel")->input("text") ?>   
 
 <?= $form->field($model, "cableTv")->input("text") ?>   
 
 <?= $form->field($model, "electricidad")->input("text") ?> 
  
 <?= $form->field($model, "aireAcon")->input("text") ?>   
 
 <?= $form->field($model, "seguridadp")->input("text") ?>   
 
 <?= $form->field($model, "powerBackup")->input("text") ?>
  
 <?= $form->field($model, "mesHoa")->input("text") ?>   
 
 <?= $form->field($model, "fechaConstruc")->input("text") ?>   
 
 <?= $form->field($model, "parqueoCerca")->input("text") ?>
  
 <?= $form->field($model, "tipoCalle")->input("text") ?>   
 
 <?= $form->field($model, "materialPared")->input("text") ?>   
 
 <?= $form->field($model, "arquitectura")->input("text") ?>
  
 <?= $form->field($model, "techo")->input("text") ?>   
 
 <?= $form->field($model, "piso")->input("text") ?>   
 
 <?= $form->field($model, "waterBackup")->input("text") ?>
 
 <?= $form->field($model, "sewage")->input("text") ?>   
 
 <?= $form->field($model, "rentable")->input("text") ?>
 
 <?= $form->field($model, "rentalPrice")->input("text") ?>   
 
 <?= $form->field($model, "mesesRentable")->input("text") ?>
 
 <?= $form->field($model, "maxPersonas")->input("text") ?>   
 
<?= $form->field($model, "positivosNegativos")->input("text") ?>
 
<?= $form->field($model, "esExclusiva")->input("text") ?>
  
<?= $form->field($model, "idUsuario")->input("text") ?>
   
</div>

<?= Html::submitButton("Crear Listing", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>

