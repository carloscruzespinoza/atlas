<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormTipolisting extends model{

public $idTipoListing;
public $nomListing;

public function rules()
 {
  return [
    ['idTipoListing', 'integer', 'message' => 'id Incorrecto'],
    ['nomListing', 'required', 'message' => 'Campo requerido'],
    ['nomListing', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
    ['nomListing', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
    
        ];
 }
 
 public function attributeLabels()
    {
        return [
            'idTipoListing'=>'id Tipo Listing',
            'nomListing'=>'Nombre Tipo Listing',
        ];
    }
 
}

