<?php require_once("conect.php"); ?>
<?php

$de = $_GET["de"];
 $ancora = $_GET["ancora"];
 $data = date("H:i:s d-m-Y");

$checkn = "SELECT * FROM ticketchat WHERE ancora=$ancora ORDER BY id DESC";
$sqlcheckn = mysql_query($checkn);
$rowsn = mysql_num_rows($sqlcheckn);
 
 if ($rowsn == 0) {
	echo'Digite sua mensagem ou coment&aacuterio sobre o assunto "';
	
$result = mysql_query("SELECT assunto FROM tickets WHERE id=$ancora");
while($row = mysql_fetch_array($result))
  {
  echo '<strong>'.$row['assunto'].'</strong>';
  }
	
	
	
	echo'"<br>As mensagens do t&eacutecnico e resolu&ccedil&atildeo ser&atildeo adicionadas aqui.';	
}
else
{

	// Buscamos e exibimos as mensagens já contidas no banco de dados
	$query = mysql_query("SELECT * FROM ticketchat WHERE ancora=$ancora ORDER BY id DESC");
	while($chat = mysql_fetch_object($query)) {
		echo "" . $chat->chat . "<p>";
	}
}
?>