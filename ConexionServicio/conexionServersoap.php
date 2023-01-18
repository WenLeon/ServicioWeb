<?php


$options =array('uri' =>'http://localhost/Proyectos_2/ServiciosWeb/Calculadora/ConexionServicio');
$server = new SoapServer('conexion.wsdl');
$server->setClass('Calculadora');
$server->handle();
 

?>