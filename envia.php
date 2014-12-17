<?php
// Incluimos o arquivo de conexão
require_once("conect.php");
// Recuperamos os valores dos campos através do método POST
$ancora = $_POST["ancora"];
$de = $_POST["de"];
$para = $_POST["para"];


$result = mysql_query("SELECT * FROM clientes WHERE id=$de.");
while($row = mysql_fetch_array($result))
  {
  $id_cliente = $row['id'];
  $nome = $row['nome'];
  }

	$data = date("H:i:s d-m-Y");


$chat = "<strong>".$nome."(Cliente)</strong> - ".$data."<br><em>".$_POST["chat"]."<em><br>";

	// Inserimos no banco de dados
	$query = mysql_query("INSERT INTO ticketchat VALUES ('', '".$ancora."', '".$de."', '".$para."', '".$chat."')");
	// Se inserido com sucesso
	if ($query) {
		echo false;
	} 
	// Se houver algum erro ao inserir
	else {
		echo "Não foi possível inserir a mensagem no momento.";
	}
?>