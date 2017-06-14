<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormOwner extends model{
public $idOwner;
public $nomOwner;
public $phOwner;
public $celOwner;
public $addressOwner;
public $nacionality;

public function rules()
 {
  return [
    ['idOwner', 'integer', 'message' => 'id Incorrecto'],
    ['nomOwner', 'required', 'message' => 'Campo requerido'],
    ['nomOwner', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
    ['nomOwner', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
    ['phOwner', 'required', 'message' => 'Corregir Campo Incorrecto'],
    ['celOwner', 'required', 'message' => 'Corregir Campo Incorrecto'],
    ['addressOwner', 'required', 'message' => 'Corregir Campo Incorrecto'],
    ['nacionality', 'required', 'message' => 'Corregir Campo Incorrecto'],
      
    
        ];
 }
 
 public function attributeLabels()
    {
        return [
            'idOwner'=>'id Dueño',
            'nomOwner'=>'Nombre',
            'phOwner'=>'Telefono',
            'celOwner'=>'Cel/Whatsapp',
            'addressOwner'=>'Direccion',
            'nacionality'=>'Nacionalidad',
        ];
    }
 
}
