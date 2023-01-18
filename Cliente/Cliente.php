<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
try {
    $cliente = new SoapClient('../ConexionServicio/conexion.wsdl');

    echo "Este es el resultado de la suma ";
    $response = $cliente->suma($num1, $num2);
    echo "Este es el resultado de la resta ";
    $response = $cliente->resta($num1, $num2);
    echo "Este es el resultado de la multiplicacion ";
    $response = $cliente->multiplicacion($num1, $num2);
    echo "Este es el resultado de la division ";
    $response = $cliente->division($num1, $num2);
    echo $response;
} catch (SoapFault $e) {
    echo "Error: " . $e->getMessage();
}

// $num1=$_GET['num1'];
// $num2=$_GET['num2'];
// $options=array('uri'=> 'http://localhost/Proyectos_2/ServiciosWeb/Calculadora/ServerSoap',
// 'location'=>'http://localhost/Proyectos_2/ServiciosWeb/Calculadora/ServerSoap/serverSoap.php');

// try{
//     $cliente = new SoapClient(null,$options);
//     $response = $cliente->suma($num1,$num2);
//     echo $response;

// }catch(SoapFault $e){
//     echo "Error: ". $e->getMessage();
// }
