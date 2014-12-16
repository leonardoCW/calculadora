<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$operador = $_POST['operador'];

if($operador == "+")
    $resultado = $numero1 + $numero2;

else 
	if($operador == "-")
    $resultado = $numero1 - $numero2;


else 
	if($operador == "*")
    $resultado = $numero1 * $numero2;


else
	if($operador == "/")
    $resultado = $numero1 / $numero2;

setcookie('resultado', $resultado);
header('Location: index.php');
?>