<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormAsignacion extends model{
public $idAsig;
public $idUsuario;
public $idLead;
public $codInterListing;
public $fechaAsig;
public $idListing;

public function rules()
 {
  return [
    ['idAsig', 'integer', 'message' => 'id Incorrecto'],
    ['idUsuario', 'integer', 'message' => 'id Incorrecto'],
    ['idLead', 'integer', 'message' => 'id Incorrecto'],
    ['fechaAsig', 'required', 'message' => 'Fecha Incorrecto'],
    ['idListing', 'integer', 'message' => 'id Incorrecto'],
      
    
        ];
 }
 
 public function attributeLabels()
    {
        return [
            'idAsig'=>'id Asignacion',
            'idUsuario'=>'Id Usuario',
            'idLead'=>'Id Lead',
            'codInterListing'=>'Cod Listing',
            'fechaAsig'=>'Fecha de Asignacion',
            'idListing'=>'id del Sistema',
        ];
    }
 
}


