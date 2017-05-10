
		
<?php
		session_start();
		include('includes/conexaodb.php');

	$op    = $_REQUEST["op"];
	$cpf   = $_REQUEST['cpf'];


	if($op == "cancelar"){

		header('Location:menuadm.php');
	}
	else{

		// montei a query com o valor do id
		$query="DELETE FROM aluno WHERE cpf='$cpf'";

		// rodando a query e jogando o resultado na var $recordset
		$recordset = mysql_query($query,$conn);

		if(mysql_num_rows($recordset)==1)
		{

		    header("Location: menuadm.php");
		}
		else
		{

			// montei a query com o valor do id
			$query="DELETE FROM professor WHERE cpf='$cpf'";

			// rodando a query e jogando o resultado na var $recordset
			$recordset = mysql_query($query,$conn);	
				
				if(mysql_num_rows($recordset)==1)
				{
					header("Location: menuadm.php");
				}
				else{
			    	echo"<script language='javascript' type='text/javascript'>alert('Erro ao deletar o Dado');window.location.href='menuadm.php';</script>";
				}
		}

		// redirecionando para select.php

		header("Location:menuadm.php");
	}
?>
	




