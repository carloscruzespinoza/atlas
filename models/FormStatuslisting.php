<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormStatuslisting extends model{

public $idStatusListing;
public $nomStatus;

public function rules()
 {
  return [
    ['idStatusListing', 'integer', 'message' => 'id Incorrecto'],
    ['nomStatus', 'required', 'message' => 'Campo requerido'],
    ['nomStatus', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
    ['nomStatus', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
    
        ];
 }
 
 public function attributeLabels()
    {
        return [
            'idStatusListing'=>'id Etatus',
            'nomStatus'=>'Nombre Estatus',
        ];
    }
 
}


