<?php

class Banco{
	function conexao($nome_banco){
		
		$localhost = "localhost";
		$usuario   = "root";
		$senha     = "kamica20";

		
		$banco = $nome_banco;
		
		mysql_connect($localhost,$usuario,$senha);
		mysql_select_db($banco);
	}

}

$banco = new Banco();

?>