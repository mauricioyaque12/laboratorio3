<?php
include "vendor/autoload.php";
$url="http://virtual.unicaes.edu.sv/webservice/webservicelaboratorio.php?wsdl";
$cliente=new nusoap_client($url,'wsdl');
$err=$cliente->getError();
if ($err) {
    echo "Error de conexion con webservicelaboratorio:$err";
    exit(0);
}
$parametros=array('nombre'=>$_POST['nombre'],'laboratorio1'=>$_POST['laboratorio1'], 'laboratorio2'=>$_POST['laboratorio2'], 
'parcial'=>$_POST['parcial']);
$result=$cliente->call('promedio',$parametros);
echo $cliente->getError();
print_r($result);
