<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormUsuario extends model{

public $idUsuario;
public $nomUsuario;
public $cedUsuario;
public $dirUsuario;
public $celUsuario;
public $telUsuario;
public $emailUsuario;
public $countryUsuario;
public $fnacUsuario;
public $sexoUsuario;
public $fAltaUsuario;
public $cargoUsuario;
public $fotoUsuario;
public $usernameUsuario;
public $passwUsuario;

public function rules()
 {
  return [
    ['idUsuario', 'integer', 'message' => 'id Incorrecto'],
    ['nomUsuario', 'required', 'message' => 'Campo requerido'],
    ['nomUsuario', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
    ['nomUsuario', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
    ['cedUsuario', 'required', 'message' => 'Campo requerido'],
    ['dirUsuario', 'required', 'message' => 'Campo requerido'],
    ['cedUsuario', 'match', 'pattern' => '/^[a-zA-Z0-9]+$/i', 'message' => 'Sólo se aceptan letras y numeros'],
    ['celUsuario', 'required', 'message' => 'Campo requerido'],
    ['telUsuario', 'required', 'message' => 'Campo requerido'],
    ['emailUsuario', 'required','message'=>'Campo requerido'],
    ['countryUsuario', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
    ['countryUsuario', 'required', 'message' => 'Campo requerido'],
    ['fnacUsuario','required','message'=>'Campo requerido'],
    ['sexoUsuario', 'string', 'max' => 1],
    ['fAltaUsuario','required','message'=>'Campo requerido'],
    ['cargoUsuario', 'string', 'max' => 50],
    ['fotoUsuario', 'string', 'max' => 150],
    ['usernameUsuario','required','message'=>'Campo requerido'],
    ['passwUsuario', 'required','message'=>'Campo requerido'],
        ];
 }
 
 public function attributeLabels()
    {
        return [
            'idUsuario'=>'id Usuario',
            'nomUsuario'=>'Nombre',
            'cedUsuario'=>'Cedula',
            'dirUsuario'=>'Direccion',
            'celUsuario'=>'Cel/Whatsapp',
            'telUsuario'=>'Telf',
            'emailUsuario'=>'E-mail',
            'countryUsuario'=>'Pais',
            'fnacUsuario'=>'Cumpleaños',
            'sexoUsuario'=>'Genero',
            'fAltaUsuario'=>'Agregado',
            'cargoUsuario'=>'Cargo',
            'fotoUsuario'=>'Foto',
            'usernameUsuario'=>'Usuario',
            'passwUsuario' =>'Contraseña',
        ];
    }
 
}

