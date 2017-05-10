
		
<?php
		session_start();
		include('includes/conexaodb.php');

	$op        = $_REQUEST["op"];
	$cpf       = $_REQUEST["cpf"];

			$query="SELECT id_atividade FROM alunoxatividade WHERE cpf_aluno='$cpf'"; 	
			
			// echo $query;
			$recordset = mysql_query($query, $conn);
			if(mysql_num_rows($recordset)==1){
				$row 		    = mysql_fetch_assoc($recordset);				
				$atividade 		= $row['id_atividade'];	
			}
			else{
				$query="SELECT id_atividade FROM professorxatividade WHERE cpf_professor='$cpf'"; 			
				// echo $query;
				$recordset = mysql_query($query, $conn);
				$row 		    = mysql_fetch_assoc($recordset);
				$atividade 		= $row['id_atividade'];
				
			}


	if($op == "cancelar"){

		header('Location:menuadm.php');
	}
	else{

		// montei a query com o valor do id
		$query="DELETE FROM alunoxatividade WHERE id_atividade='$atividade' and cpf_aluno='$cpf'";

		// rodando a query e jogando o resultado na var $recordset
		$recordset = mysql_query($query,$conn);

		if(mysql_num_rows($recordset)==1)
		{

		    header("Location: menuadm.php");
		}
		else
		{

			// montei a query com o valor do id
			$query="DELETE FROM professorxatividade WHERE id_atividade='$atividade' and cpf_professor='$cpf'";

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
	




