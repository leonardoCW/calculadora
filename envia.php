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


// Incluimos o arquivo de conexão
require_once("conect.php");
// Recuperamos os valores dos campos através do método POST

	$data = date("H:i:s d-m-Y");

	$ip = getenv("REMOTE_ADDR");


	// Inserimos no banco de dados
	$query = mysql_query("INSERT INTO calculo VALUES ('', '".$resultado."', '".$data."', '".$ip."')");
	// Se inserido com sucesso
	if ($query) {
		echo false;
	} 
	// Se houver algum erro ao inserir
	else {
		echo "Não foi possivel consultar o resultado da conta.";
	}
?>