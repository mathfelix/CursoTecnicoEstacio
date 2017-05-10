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

			$procura = $cpf;
			$query2 = mysql_query("SELECT nome FROM aluno where cpf='$procura'") or die(mysql_error());
			while($linha2 = mysql_fetch_array($query2)){
				$nome = $linha2['nome'];	
			}

			$query2 = mysql_query("SELECT id_atividade FROM alunoxatividade where cpf_aluno='$procura'") or die(mysql_error());
			while($linha2 = mysql_fetch_array($query2)){
				$id_atividade = $linha2['id_atividade'];	
			}
		
			$procura = $id_atividade;
			$query2 = mysql_query("SELECT nome FROM atividades where id='$procura'") or die(mysql_error());
			while($linha2 = mysql_fetch_array($query2)){
				$atividade = $linha2['nome'];	
			}

		?>

		<div id="cadastrar"><a href="menuadm.php" title="Painel"> &laquo; Painel </a></div><br>
		<div id="login" class="form bradius">
			
			<form action="delete_relacao.php">	
				<br><h1 align="center" class="titulo2">Deletar Usuario</h1><br>
				<br>
				
				<p class="titulo3">Deseja deletar essa atividade do aluno?</p><br>
				<p class="titulo3">CPF: <?php echo $cpf; ?></p><input type="hidden" name="cpf" value="<?php echo $cpf; ?>" class="txt4"/>
				<p class="titulo3">Nome: <?php echo $nome; ?></p><input type="hidden" name="nome" value="<?php echo $nome; ?>" class="txt4"/>
				<p class="titulo3">Atividade: <?php echo $atividade; ?></p><input type="hidden" name="atividade" value="<?php echo $atividade; ?>" class="txt4"/>
				<br>
				<center><input type="submit" value="ok" name="op">				
				<input type="submit" value="cancelar" name="op"></center>
			</form>
		</div>
		
	</body>

</html>