<?php
// conexao com o banco
include('includes/conexaodb.php');
session_start();

$user  = $_POST["login"];
$senha = $_POST["senha"];
$op	   = $_POST['op'];


// Caso erro
if(empty($senha) || empty($user) || empty($op)){
	echo"<script language='javascript' type='text/javascript'>alert('Preencha todos os campos.');window.location.href='index.php';</script>";
}
else{
		
		if($op==3){	

			// Montar a query
			$query="SELECT cpf FROM adm
			WHERE cpf='$user' AND senha='$senha' AND nivel='$op'";
			

				//rodar a query, carregando o recordset como Administrador
				$recordset = mysql_query($query,$conn);

				if(mysql_num_rows($recordset)==1)
				{
					session_start();
					$_SESSION['loggedin'] = 3;

				    header("Location: menuadm.php");
				}
				else
				{	
					$_SESSION['loggedin'] = 0;

				    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
				}
		}
		else{

			if($op==2){

				// Montar a query
				$query="SELECT cpf FROM professor
				WHERE cpf='$user' AND senha='$senha' AND nivel='$op'";

				//rodar a query, carregando o recordset como Usuario
				$recordset = mysql_query($query,$conn);

				if(mysql_num_rows($recordset)==1)
				{
					session_start();
					$_SESSION['loggedin'] = 2;

				    header("Location: painelprofessor.php");
				}
				else
				{
					$_SESSION['loggedin'] = 0;

				    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
				}
			}
			else{

				// Montar a query
				$query="SELECT cpf FROM aluno
				WHERE cpf='$user' AND senha='$senha' AND nivel='$op'";

				//rodar a query, carregando o recordset como Usuario
				$recordset = mysql_query($query,$conn);

				if(mysql_num_rows($recordset)==1)
				{
					session_start();
					$_SESSION['loggedin'] = 1;

				    header("Location: painelaluno.php");
				}
				else
				{
					$_SESSION['loggedin'] = 0;

				    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
				}

			}

		}
}

?>