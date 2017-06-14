<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormLead extends model{
public $idLead;
public $nomLead;
public $paisLead;
public $emalLead;
public $telLead;
public $celLead;
public $fechaLead;
public $idFuenteLead;

public function rules()
 {
  return [
    ['idLead', 'integer', 'message' => 'id Incorrecto'],
    ['nomLead', 'required', 'message' => 'Campo requerido'],
    ['nomLead', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
    ['nomLead', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
    ['paisLead', 'required', 'message' => 'Campo requerido'],
    ['emalLead', 'required', 'message' => 'Campo requerido'],
    ['telLead', 'required', 'message' => 'Corregir Campo Incorrecto'],
    ['celLead', 'required', 'message' => 'Corregir Campo Incorrecto'],
    ['fechaLead', 'required', 'message' => 'Corregir Campo Incorrecto'],
    ['idFuenteLead', 'integer', 'message' => 'Corregir Campo Incorrecto'],
      
    
        ];
 }
 
 public function attributeLabels()
    {
        return [
            'idLead'=>'id Lead',
            'nomLead'=>'Nombre',
            'paisLead'=>'Pais',
            'emalLead'=>'Email',
            'telLead'=>'Telefono',
            'celLead'=>'Celular',
            'fechaLead'=>'Fecha',
            'idFuenteLead'=>'id Fuente Lead',
        ];
    }
 
}
