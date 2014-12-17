<?php

include("conect.php");
$sql = mysql_query("SELECT * FROM calculo ORDER BY data DESC");
$row = mysql_fetch_assoc($sql);

echo $row["resultado"];

?>





