<?php
    
    include('includes/conexaodb.php');
    session_start();
 
    if ($_SESSION['loggedin'] != 3) {
 
        header("Location: login.html");
        exit;
    }
 
?>
<html>
<head>
	<title>
		Deletar Usuario
	</title>
		<meta charset="utf-8">
        <link href="cssboot/bootstrap.css" rel="stylesheet">
        <link href="style2.css" rel="stylesheet">
    
        <!-- Chamadas JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-modal.js"></script>
</head>

	<body>

		<?php
		
			$cpf 	      = $_REQUEST['id'];

			$query="SELECT nome FROM aluno WHERE cpf='$cpf'"; 	
			
			// echo $query;
			$recordset = mysql_query($query, $conn);
			if(mysql_num_rows($recordset)==1){
				$row 		= mysql_fetch_assoc($recordset);
				$nome 		= $row['nome'];
			}
			else{
				$query="SELECT nome FROM professor WHERE cpf='$cpf'"; 	
				// echo $query;
				$recordset = mysql_query($query, $conn);
				$row 		= mysql_fetch_assoc($recordset);
				$nome 		= $row['nome'];
			}

		?>

		<div id="login">
			
			<form action="delete_relacao.php">	
				<br><h1 align="center" class="titulo2">Deletar Atividade</h1><br>
				<br>
				
				<p class="titulo3">Deseja deletar essa atividade do aluno?</p><br>
				<p class="titulo3">CPF: <?php echo $cpf; ?></p><input type="hidden" name="cpf" value="<?php echo $cpf; ?>" class="txt4"/>
				<p class="titulo3">Nome: <?php echo $nome; ?></p><input type="hidden" name="nome" value="<?php echo $nome; ?>" class="txt4"/>
				<br>
				<center><input type="submit" value="ok" name="op">				
				<input type="submit" value="cancelar" name="op"></center>
			</form>
		</div>
		
	</body>

</html>