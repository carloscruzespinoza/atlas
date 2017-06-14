<?php

namespace app\models;
use yii;
use yii\base\model;
//VALIDAR DEL LADO DEL CLIENTE Y DEL SERVIDOR

class ValidarFormulario extends model{
    //A crear los atributos
    public $nombre;
    public $email;
    
    //metodo de validacion que retorna un array para validar los atributos
    public function rules(){
        //retorno del array
        return[
            //nombre del atributo, regla a aplicar, mensaje o complemento
            ['nombre', 'required', 'message'=>'Debe Ingresarse valor'],
            ['nombre','match','pattern'=>'/^.{3,50}$/','message'=>'Minimo 3 y maximo 50 caracteres'],
            ['nombre','match','pattern'=>'/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/','message'=>'Solo se aceptan letras o numeros'],
            ['email','required','message'=>'Campo requerido'],
            ['email','match','pattern'=>'/^.{5,50}$/','message'=>'Minimo 5 y maximo 50 caracteres'],
            ['email','email','message'=>'Formato no valido'],
        ];
    }
    
    //regular las etiquetas label y retorna un array
    public function attributeLabels()
    {
        return[
          'nombre'  => 'Nombre: ',
          'email' => 'Email: ',
        ];
        
    }
    
}

