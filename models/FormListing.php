<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormListing extends model{

public $idListing;
public $idStatusListing;
public $codInterListing;
public $fechaListing;
public $comision;
public $fotoArchivo;
public $scannedFisico;
public $escritura;
public $plano;
public $rotulado;
public $nomListing;
public $idOwner;
public $addressListing;
public $cityListing;
public $timeinMarket;
public $idTipoListing;
public $rooms;
public $baths;
public $garage;
public $cieloFalso;
public $salas;
public $stories;
public $terraza;
public $bodega;
public $piscina;
public $spa;
public $jardin;
public $hotWater;
public $bbqArea;
public $landArea;
public $builtArea;
public $aguaPotable;
public $lineaTel;
public $cableTv;
public $electricidad;
public $aireAcon;
public $seguridadp;
public $powerBackup;
public $mesHoa;
public $fechaConstruc;
public $parqueoCerca;
public $tipoCalle;
public $materialPared;
public $arquitectura;
public $techo;
public $piso;
public $waterBackup;
public $sewage;
public $rentable;
public $rentalPrice;
public $mesesRentable;
public $maxPersonas;
public $positivosNegativos;
public $esExclusiva;
public $idUsuario;

public function rules()
 {
  return [
['idListing','integer', 'message' => 'Verifique el Campo'],
['idStatusListing','integer', 'message' => 'Solo admite entero'],
['codInterListing','integer', 'message' => 'Verifique el Campo'],
['fechaListing','required', 'message' => 'Verifique el Campo'],
['comision','required', 'message' => 'Verifique el Campo'],
['fotoArchivo','required', 'message' => 'Verifique el Campo'],
['scannedFisico','required', 'message' => 'Verifique el Campo'],
['escritura','required', 'message' => 'Verifique el Campo'],
['plano','required', 'message' => 'Verifique el Campo'],
['rotulado','required', 'message' => 'Verifique el Campo'],
['nomListing','required', 'message' => 'Verifique el Campo'],
['idOwner','integer', 'message' => 'Verifique el Campo'],
['addressListing','required', 'message' => 'Verifique el Campo'],
['cityListing','required', 'message' => 'Verifique el Campo'],
['timeinMarket','required', 'message' => 'Verifique el Campo'],
['idTipoListing','integer', 'message' => 'Verifique el Campo'],
['rooms','required', 'message' => 'Verifique el Campo'],
['baths','required', 'message' => 'Verifique el Campo'],
['garage','required', 'message' => 'Verifique el Campo'],
['cieloFalso','required', 'message' => 'Verifique el Campo'],
['salas','required', 'message' => 'Verifique el Campo'],
['stories','required', 'message' => 'Verifique el Campo'],
['terraza','required', 'message' => 'Verifique el Campo'],
['bodega','required', 'message' => 'Verifique el Campo'],
['piscina','required', 'message' => 'Verifique el Campo'],
['spa','required', 'message' => 'Verifique el Campo'],
['jardin','required', 'message' => 'Verifique el Campo'],
['hotWater','required', 'message' => 'Verifique el Campo'],
['bbqArea','required', 'message' => 'Verifique el Campo'],
['landArea','required', 'message' => 'Verifique el Campo'],
['builtArea','required', 'message' => 'Verifique el Campo'],
['aguaPotable','required', 'message' => 'Verifique el Campo'],
['lineaTel','required', 'message' => 'Verifique el Campo'],
['cableTv','required', 'message' => 'Verifique el Campo'],
['electricidad','required', 'message' => 'Verifique el Campo'],
['aireAcon','required', 'message' => 'Verifique el Campo'],
['seguridadp','required', 'message' => 'Verifique el Campo'],
['powerBackup','required', 'message' => 'Verifique el Campo'],
['mesHoa','required', 'message' => 'Verifique el Campo'],
['fechaConstruc','required', 'message' => 'Verifique el Campo'],
['parqueoCerca','required', 'message' => 'Verifique el Campo'],
['tipoCalle','required', 'message' => 'Verifique el Campo'],
['materialPared','required', 'message' => 'Verifique el Campo'],
['arquitectura','required', 'message' => 'Verifique el Campo'],
['techo','required', 'message' => 'Verifique el Campo'],
['piso','required', 'message' => 'Verifique el Campo'],
['waterBackup','required', 'message' => 'Verifique el Campo'],
['sewage','required', 'message' => 'Verifique el Campo'],
['rentable','required', 'message' => 'Verifique el Campo'],
['rentalPrice','required', 'message' => 'Verifique el Campo'],
['mesesRentable','required', 'message' => 'Verifique el Campo'],
['maxPersonas','required', 'message' => 'Verifique el Campo'],
['positivosNegativos','required', 'message' => 'Verifique el Campo'],
['esExclusiva','required', 'message' => 'Verifique el Campo'],
['idUsuario','integer', 'message' => 'Verifique el Campo'],
 
      
   
        ];
 }
 
 public function attributeLabels()
    {
        return [
            'idListing'=>'Id Listing',
            'idStatusListing'=>'Status',
            'codInterListing'=>'Cod Interno Listing',
            'fechaListing'=>'Fecha',
            'comision'=>'% comision',
            'fotoArchivo'=>'Foto',
            'scannedFisico'=>'Escaneados',
            'escritura'=>'Escritura',
            'plano'=>'Plano',
            'rotulado'=>'Rotulado',
            'nomListing'=>'Nombre',
            'idOwner'=>'ID del Dueño',
            'addressListing'=>'Direccion',
            'cityListing'=>'Ciudad',
            'timeinMarket'=>'Tiempo en el Mercado',
            'idTipoListing'=>'ID Tipo de Listing',
            'rooms'=>'# Cuartos',
            'baths'=>'# Baños',
            'garage'=>'# Garajes',
            'cieloFalso'=>'Cielo Razo',
            'salas'=>'# Salas',
            'stories'=>'# Pisos',
            'terraza'=>'Terraza',
            'bodega'=>'# Bodegas',
            'piscina'=>'Piscina',
            'spa'=>'Spa',
            'jardin'=>'Jarding',
            'hotWater'=>'Agua Caliente',
            'bbqArea'=>'Area BBQ',
            'landArea'=>'Terreno',
            'builtArea'=>'Area Construccion',
            'aguaPotable'=>'Agua Potable',
            'lineaTel'=>'Telefono',
            'cableTv'=>'TV por Cable',
            'electricidad'=>'Electricidad',
            'aireAcon'=>'Aire acondicionado',
            'seguridadp'=>'Seguridad',
            'powerBackup'=>'Planta Electrica',
            'mesHoa'=>'Mes HOA',
            'fechaConstruc'=>'Año Construccion',
            'parqueoCerca'=>'Parque cerca',
            'tipoCalle'=>'Tipo de calle',
            'materialPared'=>'Material de la Pared',
            'arquitectura'=>'Arquitectura',
            'techo'=>'Tipo Techo',
            'piso'=>'Tipo Piso',
            'waterBackup'=>'Tanque de agua',
            'sewage'=>'Aguas reciduales',
            'rentable'=>'Rentable',
            'rentalPrice'=>'Precio Renta',
            'mesesRentable'=>'Meses Rentable',
            'maxPersonas'=>'Max Personas',
            'positivosNegativos'=>'Comentarios',
            'esExclusiva'=>'Exclusiva de CGP',
            'idUsuario'=>'ID Usuario',
        ];
    }
 
}

