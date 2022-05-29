<?php
include "vendor/autoload.php";
$server=new nusoap_server;
$server->configureWSDL('server','urn:server');
$server->wsdl->schemaTargetNamespace='urn:server';
$server->wsdl->addComplexType(
    'Promedio',
    'complexType',
    'struct',
    'all',
    '',
    array(
          'nombre'=>array('name'=>'nombre','type'=>'xsd:string'),
          'nota1'=>array('name'=>'laboratorio1','type'=>'xsd:float'),
          'nota2'=>array('name'=>'laboratorio2','type'=>'xsd:float'),
          'parcial'=>array('name'=>'parcial','type'=>'xsd:float'),
          'promedio'=>array('name'=>'promedio','type'=>'xsd:float')
    )
);

$server->register(
    'promedio',
    array('nombre'=>'xsd:string','laboratorio1'=>'xsd:float', 'laboratorio2'=>'xsd:float', 'parcial'=>'xsd:float'),
    array('return'=>'tns:Promedio'),
    'urn:server',
    'urn:server#promedioServer',
    'rpc',
    'encoded',
    'Funcion que solicita 3 notas y devuelve el promedio final'
);

function promedio($nombre, $laboratorio1, $laboratorio2, $parcial){
        'nota2'=>$laboratorio2,
        'parcial'=>$parcial,
        'promedio'=>$promedio
    );
    return $result;
}


$server->service(file_get_contents("php://input"));