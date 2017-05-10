<?php
session_start();
include('includes/conexaodb.php');

$cpf 		= $_POST['cpf'];
$nome 		= $_POST['nome'];
$nascimento = $_POST['data'];
$sexo 		= $_POST['sexo'];
$email 		= $_POST['email'];
$telefone 	= $_POST['telefone'];
$senha 		= $_POST['senha'];

$query = "UPDATE professor SET cpf='$cpf', nome='$nome', data='$nascimento', sexo='$sexo', email='$email',
telefone='$telefone', senha='$senha' WHERE cpf='$cpf'";

//echo $query;
$recordset = mysql_query($query, $conn);

//$_SESSION['msg']="UPDATE o $nome";
header('Location:menuadm.php');

if(mysql_num_rows($recordset)!=1){
	$query = "UPDATE aluno SET cpf='$cpf', nome='$nome', data='$nascimento', sexo='$sexo', email='$email', telefone='$telefone', senha='$senha' WHERE cpf='$cpf'";

	$recordset = mysql_query($query, $conn);

	header('Location:menuadm.php');
}
else{
	echo"<script language='javascript' type='text/javascript'>alert('Erro ao alterar os Dados');window.location.href='menuadm.php';</script>";
}

?>










