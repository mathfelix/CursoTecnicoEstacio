<?php	
	$conn = mysql_connect("localhost","root","kamica20") 
			or die("Servidor fora do ar");
	mysql_select_db("academia",$conn) 
			or die("Sem acesso ao banco");
?>
