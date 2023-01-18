<?php
include ('Calculadora.php');

$options =array('uri' =>'http://localhost/Proyectos_2/ServiciosWeb/Calculadora');
$server =new SoapServer(NULL,$options);
$server->setClass('Calculadora');
$server->handle();
 
?>