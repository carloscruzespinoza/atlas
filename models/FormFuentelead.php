<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormFuentelead extends model{
public $idFuenteLead;
public $nombreFuente;


public function rules()
 {
  return [
    ['idFuenteLead', 'integer', 'message' => 'id Incorrecto'],
    ['nombreFuente', 'required', 'message' => 'Campo requerido'],
    
    
        ];
 }
 //etiquetas nuevas mejoradas
 //Otro cambio extra
 public function attributeLabels()
    {
        return [
            'idFuenteLead'=>'id Fuente Lead',
            'nombreFuente'=>'Nombre Fuente',
            
        ];
    }
 
}