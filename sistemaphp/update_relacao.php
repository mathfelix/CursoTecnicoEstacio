<?php
session_start();
include('includes/conexaodb.php');

$cpf 		= $_POST['cpf'];
$atividade 	= $_POST['atividade'];


$query = "UPDATE alunoxatividade SET id_atividade='$atividade' WHERE cpf_aluno='$cpf'";

//echo $query;
$recordset = mysql_query($query, $conn);

if(mysql_num_rows($recordset)!=1){
	//$_SESSION['msg']="UPDATE o $nome";
	header('Location:menuadm.php');
}
else{

	if(mysql_num_rows($recordset)!=1){
		$query = "UPDATE professorxatividade SET id_atividade='$atividade' WHERE cpf_professor='$cpf'";

		$recordset = mysql_query($query, $conn);

		header('Location:menuadm.php');
	}
	else{
		echo"<script language='javascript' type='text/javascript'>alert('Erro ao alterar os Dados');window.location.href='menuadm.php';</script>";
	}

}

?>










